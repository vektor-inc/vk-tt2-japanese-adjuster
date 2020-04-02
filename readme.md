# Lightning Customize Plugin

## Code Samples

### 投稿者アーカイブページの表示名を変更する

```
function my_lightning_get_the_archive_title( $title ){
	if ( is_author( )){
		$title = '<span>' . esc_html( get_the_author() ). '</span>';
	}
	return $title;
}
add_filter( 'lightning_get_the_archive_title', 'my_lightning_get_the_archive_title' );
```