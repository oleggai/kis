{extends file="industrial/equipments"}
{block name='form-equipments'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">

        <input type="text" name="name-equipment" placeholder="Найменування">
        <input type="text" name="brand" placeholder="Бренд">
        <input type="text" name="count" placeholder="Кількість">
        <input type="text" name="cost" placeholder="Вартість">
        <input type="datetime-local" name="buy-date">
        <input type="datetime-local" name="expire-date">
        <input type="submit" value="send">
    </form>
{/block}