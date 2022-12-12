<?php
declare( strict_types=1 );


namespace Shorter_URL\Display;

use Shorter_URL\Short_URL;

class Metabox_Display {

	private Short_URL $short_url;

	public function __construct( Short_URL $short_url ) {
		$this->short_url = $short_url;
	}

	public function display() {
		add_meta_box(
			'short_url',
			__( 'Short URL', 'shorter-urls' ),
			[ $this, 'render' ],
			'post',
			'side',
			'high'
		);
	}

	public function render() {
		?>
		<label for="short_url">Short URL</label>
		<input
			type="text"
			id="short_url"
			name="short_url"
			readonly
			value="<?php echo esc_attr( $this->short_url->get_short_url() ); ?>"
		/>
		<?php
	}

}