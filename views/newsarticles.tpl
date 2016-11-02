<div id="newsdiv">
  <div class="edtour">
    <img src="ednews.png" alt="" id="ednews" />
  </div>
<div class="pagination">
  <ul>
    <li><a href="?action=home&pagenr=2">2</a></li>
    <li><a href="?action=home&pagenr=1">1</a></li>

  </ul>
</div>


<section id="news">
  {foreach from=$result item=oneItem}
  <article><h1>{$oneItem.title}</h1>
    <img src='{$oneItem.image}'>
    <br>
    <content>{$oneItem.content}</content>
    <p>{$oneItem.date_created}</p>
  </article>
  {/foreach}
</section>
</div>
