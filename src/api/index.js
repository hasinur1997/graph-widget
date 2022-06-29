import apiFetch from '@wordpress/api-fetch';

const base = 'wp-json/graph-widget';
const version = 'v1';

const GraphApi = {
	/**
	 * Get data from api
	 *
	 * @param {string} endpoint
	 *
	 * @return {Array} graph data
	 */
	get: ( endpoint ) => {
		return apiFetch( {
			path: `/${ base }/${ version }/${ endpoint }`,
			method: 'GET',
		} );
	},
};

export default GraphApi;
