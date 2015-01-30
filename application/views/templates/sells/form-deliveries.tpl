{extends file="sells/deliveries.tpl"}
{block name='form-deliveries'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">
        <select name='supplier'>
            {foreach $suppliers as $supplier}
                <option value="{$supplier->getIdSupplier()}">{$supplier->getNameSupplier()}</option>
            {/foreach}
        </select>
        <select name='raw'>
            {foreach $raws as $raw}
                <option value="{$raw->getIdRaw()}">{$raw->getName()}</option>
            {/foreach}
        </select>
        <input type="number" placeholder="Кількість" name="count">
        <input type="number" placeholder="Вартість" name="paid">
        <input type="datetime-local" name="date">
        <input type="submit" value="send">
    </form>
{/block}