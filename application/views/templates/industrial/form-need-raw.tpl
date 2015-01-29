{extends file="industrial/need-raw.tpl"}
{block name='form-need-raw'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">
        <select name='product'>
            {foreach $products as $product}
                <option value="{$product->getIdProduct()}">{$product->getName()}</option>
            {/foreach}
        </select>
        <select name='raw'>
            {foreach $raws as $raw}
                <option value="{$raw->getIdRaw()}">{$raw->getName()}</option>
            {/foreach}
        </select>
        <input type="number" value="Кількість" name="count">
        <input type="submit" value="send">
    </form>
{/block}