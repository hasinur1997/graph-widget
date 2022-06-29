import { useState } from 'react';
import { __ } from "@wordpress/i18n";
import { LineChart, Line, CartesianGrid, XAxis, YAxis, Tooltip } from 'recharts';
import { useEffect } from 'react';
import data from './data';

const Graph = () => {
    const [dataRange, setDataRange] = useState(7)
    const [graph, setGraph] = useState(data.slice(0, dataRange))

    /**
     * Set graph data
     * @param {Object} e 
     */
    const setGraphData = (e) => {
        setDataRange(Number(e.target.value))
    }

    useEffect(() =>{
        setGraph(data.slice(0, dataRange))
    },[dataRange])


    /**
     * Prepare graph data
     */
    const renderLineChart = (
        <LineChart 
            width={475} 
            height={300} 
            data={graph} 
            margin={{ top: 30, right: 20, bottom: 15, left: 0 }}
        >
            <Line type="monotone" dataKey="uv" stroke="#8884d8" />
            <CartesianGrid stroke="#ccc" strokeDasharray="5 5" />
            <XAxis dataKey="name" />
            <YAxis />
            <Tooltip />
        </LineChart>
    );

    return (
        <>
            <div style={{display: 'flex', justifyContent: 'flex-end'}}>
                <select 
                    name="date-range" 
                    id="date-range"
                    onChange={setGraphData}
                    value={dataRange}
                >
                    <option value="7">{ __( 'Last 7 Days', 'graph-widget') }</option>
                    <option value="15">{ __( 'Last 15 Days', 'graph-data') }</option>
                    <option value="30">{ __( 'Last 30 Days', 'graph-data' ) }</option>
                </select>
            </div>
            
            {renderLineChart}
        </>
    )
}

export default Graph;
