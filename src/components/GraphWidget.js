import React, { useState, useEffect } from 'react';
import axios from 'axios';
import { LineChart, Line, XAxis, YAxis, CartesianGrid, Tooltip, Legend } from 'recharts';

const GraphWidget = () => {
  const [data, setData] = useState([]);
  const [days, setDays] = useState(7); // default to 7 days

  const handleChange = (event) => {
    setDays(parseInt(event.target.value));
  };

  useEffect(() => {
    const fetchData = async () => {
      try {
        const response = await axios.get(`/wp-json/wpdw/v1/graph-data/${days}`);
        setData(response.data);
      } catch (error) {
        console.error(error);
      }
    };

    fetchData();
  }, [days]);

  return (
    <div className="graph-widget">
      <h2>Graph Widget</h2>
      <select value={days} onChange={handleChange}>
        <option value="7">Last 7 days</option>
        <option value="15">Last 15 days</option>
        <option value="30">Last 30 days</option>
      </select>
      <LineChart width={400} height={250} data={data}>
        <CartesianGrid strokeDasharray="3 3" />
        <XAxis dataKey="date" />
        <YAxis />
        <Tooltip />
        <Legend />
        <Line type="monotone" dataKey="pv" stroke="#8884d8" activeDot={{ r: 8 }} />
        <Line type="monotone" dataKey="uv" stroke="#82ca9d" />
      </LineChart>
    </div>
  );
};

export default GraphWidget;
