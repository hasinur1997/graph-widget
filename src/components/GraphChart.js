import {
	LineChart,
	Line,
	CartesianGrid,
	XAxis,
	YAxis,
	Tooltip,
} from 'recharts';

const GraphChart = ( props ) => {
	return (
		<LineChart
			width={ 475 }
			height={ 300 }
			data={ props.data }
			margin={ { top: 30, right: 20, bottom: 15, left: 0 } }
		>
			<Line type="monotone" dataKey="uv" stroke="#8884d8" />
			<CartesianGrid stroke="#ccc" strokeDasharray="5 5" />
			<XAxis dataKey="name" />
			<YAxis />
			<Tooltip />
		</LineChart>
	);
};

export default GraphChart;
