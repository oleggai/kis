{extends file="orders/customers.tpl"}
{block name='form-customers'}

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
        <input type="submit" value="send">
    </form>
{/block}