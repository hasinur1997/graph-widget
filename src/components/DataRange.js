import { __ } from '@wordpress/i18n';

const DataRange = ( props ) => {
	return (
		<>
			<div style={ { display: 'flex', justifyContent: 'flex-end' } }>
				<select
					name="date-range"
					id="date-range"
					onChange={ props.setGraphData }
					value={ props.dataRange }
				>
					<option value="7">
						{ __( 'Last 7 Days', 'graph-widget' ) }
					</option>
					<option value="15">
						{ __( 'Last 15 Days', 'graph-data' ) }
					</option>
					<option value="30">
						{ __( 'Last 30 Days', 'graph-data' ) }
					</option>
				</select>
			</div>
		</>
	);
};

export default DataRange;
