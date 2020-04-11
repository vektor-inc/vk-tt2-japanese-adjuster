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

---

### スマホでヘッダーに電話番号と問い合わせボタンを配置する

add_action(
	'lightning_header_logo_after',
	function() {
		?>
		<div class="text-center font-weight-bold mt-1 mb-2 d-lg-none">
			<div><a href="tel:000-000-0000" style="font-size:1.4rem;">000-000-0000</a></div>
			<a href="/contact/" class="btn btn-primary btn-block">お問い合わせ</a>
		</div>
		<?php
	}
);