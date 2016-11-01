<section>
  

  {foreach from=$result item=oneItem}
  <article><h1>{$oneItem.titel}</h1>

    <content>{$oneItem.aboutinfo}</content>
    <p>{$oneItem.contact}</p>
  </article>
  {/foreach}
</section>
