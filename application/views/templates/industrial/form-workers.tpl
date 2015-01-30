{extends file="industrial/workers.tpl"}
{block name='form-workers'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">
        <input type="text" name="name" placeholder="ФІО">
        <input type="number" name="experience" placeholder='Стаж'>
        <input type="submit" value="send">
    </form>
{/block}