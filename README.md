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
| option_value | a:3:{i:7;a:3:{i:0;a:4:{s:4:"name";s:6:"Page A";s:2:"uv";i:4000;s:2:"pv";i:2400;s:3:"amt";i:2400;}i:1;a:4:{s:4:"name";s:6:"Page B";s:2:"uv";i:8000;s:2:"pv";i:4800;s:3:"amt";i:4800;}i:2;a:4:{s:4:"name";s:6:"Page C";s:2:"uv";i:6000;s:2:"pv";i:3200;s:3:"amt";i:3200;}}i:15;a:3:{i:0;a:4:{s:4:"name";s:6:"Page A";s:2:"uv";i:5000;s:2:"pv";i:3000;s:3:"amt";i:3000;}i:1;a:4:{s:4:"name";s:6:"Page B";s:2:"uv";i:7500;s:2:"pv";i:3800;s:3:"amt";i:3800;}i:2;a:4:{s:4:"name";s:6:"Page C";s:2:"uv";i:5500;s:2:"pv";i:1500;s:3:"amt";i:1500;}}i:30;a:3:{i:0;a:4:{s:4:"name";s:6:"Page A";s:2:"uv";i:9000;s:2:"pv";i:6400;s:3:"amt";i:6400;}i:1;a:4:{s:4:"name";s:6:"Page B";s:2:"uv";i:4400;s:2:"pv";i:1500;s:3:"amt";i:1500;}i:2;a:4:{s:4:"name";s:6:"Page C";s:2:"uv";i:6400;s:2:"pv";i:1800;s:3:"amt";i:1800;}}} |

```
// The original dummy array data
[
    '7' => [
        [   
            'name' => "Page A",
            'uv' => 4000,
            'pv' => 2400,
            'amt' => 2400
        ],
        [   
            'name' => "Page B",
            'uv' => 8000,
            'pv' => 4800,
            'amt' => 4800
        ],
        [
            'name' => "Page C",
            'uv' => 6000,
            'pv' => 3200,
            'amt' => 3200
        ],
    ],
    '15' => [
        [   
            'name' => "Page A",
            'uv' => 5000,
            'pv' => 3000,
            'amt' => 3000
        ],
        [   
            'name' => "Page B",
            'uv' => 7500,
            'pv' => 3800,
            'amt' => 3800
        ],
        [
            'name' => "Page C",
            'uv' => 5500,
            'pv' => 1500,
            'amt' => 1500
        ],
    ],
    '30' => [
        [   
            'name' => "Page A",
            'uv' => 9000,
            'pv' => 6400,
            'amt' => 6400
        ],
        [   
            'name' => "Page B",
            'uv' => 4400,
            'pv' => 1500,
            'amt' => 1500
        ],
        [
            'name' => "Page C",
            'uv' => 6400,
            'pv' => 1800,
            'amt' => 1800
        ],
    ],
];
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