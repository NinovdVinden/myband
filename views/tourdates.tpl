<div id="tourdiv">
  <div class="edtour">
    <img src="EdSheeran-slider.png" alt="" id="edtourdates" />
  </div>

  <section>
  <br>
    <table>
    <tr>
      <th>Date</th>
      <th>City</th>
      <th>Venue</th>
    </tr>
    {foreach from=$result item=oneItem}
    <tr>
      <td>{$oneItem.date}</td>
      <td>{$oneItem.city}</td>
      <td>{$oneItem.venue}</td>
    </tr>
  {/foreach}
  </table>


  </section>
</div>