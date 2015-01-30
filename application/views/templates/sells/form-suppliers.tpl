{extends file="sells/suppliers.tpl"}
{block name='form-suppliers'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">
        <input type="text" placeholder="ФІО" name="name">
        <input type="text" placeholder="Адрес" name="address">
        <input type="text" placeholder="Телефон" name="phone">
        <select name="bank">
            {foreach $banks as $bank}
                <option value="{$bank->getIdBank()}">{$bank->getNameBank()}</option>
            {/foreach}
        </select>
        <input type="submit" value="send">
    </form>
{/block}