const {
	registerBlockType,
} = wp.blocks;

registerBlockType( 'wp-scripts-demo/shelf', {
	title: 'Shelf Block',
	icon: 'shelf',
	category: 'layout',
	edit: () => <div>This is a shelf block.</div>,
	save: () => <div>This is a shelf block.</div>,
} );
