const {
	registerBlockType,
} = wp.blocks;

registerBlockType( 'wp-scripts-demo/book', {
	title: 'Book Block',
	icon: 'book',
	category: 'layout',
	edit: () => <div>This is a book block.</div>,
	save: () => <div>This is a book block.</div>,
} );
