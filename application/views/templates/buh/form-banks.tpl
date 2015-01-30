{extends file="buh/banks.tpl"}
{block name='form-banks'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">

        <input type="text" name="name" placeholder="Назва банку">
        <input type="submit" value="send">
    </form>
{/block}