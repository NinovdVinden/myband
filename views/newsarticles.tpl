<div id="newsdiv">
  <div class="edtour">
    <img src="ednews.png" alt="" id="ednews" />
  </div>
<div class="pagination">
  <ul>
    <li><a href="?action=home&pagenr=1">1</a></li>
    <li><a href="?action=home&pagenr=2">2</a></li>


  </ul>
</div>



  {foreach from=$result item=oneItem}
  <div id="newsdivje"><p id="newstitle">{$oneItem.title}</p>
    <img src='{$oneItem.image}' id="newsimg">
    <br>
    <p>
      {$oneItem.content}
    </p>
    <p>{$oneItem.date_created}</p>
    <br>

  </div>
  {/foreach}
  <div class="pagination">
    <ul>
      <li><a href="?action=home&pagenr=1">1</a></li>
      <li><a href="?action=home&pagenr=2">2</a></li>


    </ul>
  </div>
  <br>

</div>
