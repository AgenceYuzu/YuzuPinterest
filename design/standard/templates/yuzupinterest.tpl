<link rel="stylesheet" type="text/css" href={'stylesheets/yuzupinterest.css'|ezdesign()} />

{if is_set( $board )}
	{def $feed = fetch( feed, parse, hash( 'rss_url', concat('http://pinterest.com/',$account,'/',$board,'/rss') ) )}
{else}
	{def $feed = fetch( feed, parse, hash( 'rss_url', concat('http://pinterest.com/',$account,'/feed.rss') ) )}
{/if}
{if is_set( $image_limit )}
	{def $limit = $image_limit}
{else}
	{def $limit = 3}
{/if}

<div id="yuzupinterest">
{if is_set( $title )}
	<h4>{$title}</h4>
{/if}
<ul id="yuzupinterest-widget">
{foreach $feed.item as $item max $limit}
    <li class="yuzupinterest-pin">
		<div class="yuzupinterest-image">
        {def $image=pregmatch( '/<img[^>]+>/i', $item.description.text )}
        <a href={$item.link.0.href|ezurl}>{$image.[0]}</a>
        {if is_set( $board )}
        {def $caption=$item.description.text|explode( '</a>' )}
        <span><p>{$caption.[1]}</p></span>
        {else}
		{def $caption=$item.description.text|explode( '<p>' )}
		<span><p>{$caption.[2]}</p></span>
        {/if}
    	</div>
    	{*$caption|attribute(show)*}
	</li>
{/foreach}


<li class="yuzupinterest-follow-me">
	<a href={concat('http://pinterest.com/',$account,'/')} target="_blank">
	<img src="http://passets-cdn.pinterest.com/images/follow-on-pinterest-button.png" width="156" height="26" alt="Follow Me on Pinterest" />
	</a>
</li>
</ul>
</div>