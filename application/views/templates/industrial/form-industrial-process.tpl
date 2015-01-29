{extends file="industrial/industrial-process.tpl"}
{block name='form-industrial-process'}
    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}
    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">
        <select name='worker'>
            {foreach $workers as $worker}
                <option value="{$worker->getIdWorker()}">{$worker->getFullname()}</option>
            {/foreach}
        </select>
        <select name='equipment'>
            {foreach $equipments as $equipment}
                <option value="{$equipment->getIdEquipment()}">{$equipment->getName()}</option>
            {/foreach}
        </select>
        <select name='product'>
            {foreach $products as $product}
                <option value="{$product->getIdProduct()}">{$product->getName()}</option>
            {/foreach}
        </select>
        <input type="number" name="count">
        <input type="datetime-local" name="date">
        <input type="submit" value="send">
    </form>
{/block}