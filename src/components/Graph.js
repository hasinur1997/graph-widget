import { useState, useEffect } from 'react';

import GraphApi from '../api';
import GraphChart from './GraphChart';
import DataRange from './DataRange';
import Loader from './Loader';

const Graph = () => {
	const [ data, setData ] = useState( [] );
	const [ dataRange, setDataRange ] = useState( 7 );
	const [ graph, setGraph ] = useState( data.slice( 0, dataRange ) );
	const [ isLoading, setIsLoading ] = useState( true );

	/**
	 * Set graph data
	 *
	 * @param {Object} e
	 */
	const setGraphData = ( e ) => {
		setDataRange( Number( e.target.value ) );
	};

	/**
	 * Fetch data from api
	 */
	const getData = () => {
		GraphApi.get( 'graph' )
			.then( ( res ) => {
				setData( res );
				setGraph( res.slice( 0, dataRange ) );
				setIsLoading( false );
			} )
			.catch( () => {} );
	};

	/**
	 * Run when instantiate
	 */
	useEffect( () => {
		getData();
		setGraph( data.slice( 0, dataRange ) );
	}, [ dataRange ] );

	return (
		<>
			{ isLoading ? (
				<Loader />
			) : (
				<>
					<DataRange
						setGraphData={ setGraphData }
						dataRange={ dataRange }
					/>

					<GraphChart data={ graph } />
				</>
			) }
		</>
	);
};

export default Graph;
