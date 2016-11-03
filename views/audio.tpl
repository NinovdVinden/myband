<div id="audiodiv">
  <div class="edtour">
    <img src="xalbum.png" alt="" id="edtouraudio" />
  </div>

<section>
<br>
  <table id="audiotable">
  <tr>
    <th>Name</th>
    <th>Listen</th>

  </tr>
  {foreach from=$result item=oneItem}
  <tr>
    <td>{$oneItem.name2}</td>
    <td>
      <audio controls>

        <source src="audio/{$oneItem.name}" type="audio/mpeg">
        </audio>
</td>

  </tr>
{/foreach}
</table>
</section>
</div>
