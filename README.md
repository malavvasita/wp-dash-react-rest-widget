# WP Dashboard Widget with Recharts
Performance graph on WP ADMIN dashboard using ReactJS + Rest API + Recharts

## Installation

This plugin requires [Node.js](https://nodejs.org/) v10+ to run.

Install the dependencies and devDependencies after downloading the plugin.

```
npm install --save
```
> Before runnig and activating the plugin,
> you can/should add a database entry with

| Yield | Data |
| ------ | ------ |
| Table Name | wp_options |
| option_name | wpdw_graph_data |
| option_value | a:3:{i:7;a:4:{s:4:"name";s:6:"Page A";s:2:"uv";i:4000;s:2:"pv";i:2400;s:3:"amt";i:2400;}i:15;a:4:{s:4:"name";s:6:"Page B";s:2:"uv";i:8000;s:2:"pv";i:4800;s:3:"amt";i:4800;}i:30;a:4:{s:4:"name";s:6:"Page C";s:2:"uv";i:6000;s:2:"pv";i:3200;s:3:"amt";i:3200;}} |

```
// The original dummy array data
array(
    '7' => array(
            'name' => "Page A",
            'uv' => 4000,
            'pv' => 2400,
            'amt' => 2400
        ),
    '15' => array(
            'name' => "Page B",
            'uv' => 8000,
            'pv' => 4800,
            'amt' => 4800
        ),
    '30' => array(
            'name' => "Page C",
            'uv' => 6000,
            'pv' => 3200,
            'amt' => 3200
        ),
);
```
*You can find the dummy data with example here: [Recharts Examples](https://recharts.org/en-US/examples)

# Developer Assistance
If you are developer and want to modify the plugin with your specific requirements, the file to consider is:
```
/wp-content/plugins/wp-dash-react-rest-widget/src/index.js
```
And the GraphWidget component resides at
```
/wp-content/plugins/wp-dash-react-rest-widget/src/components/GraphWidget.js
```
After changing anything at the development level, consider running command
```
npx webpack
```