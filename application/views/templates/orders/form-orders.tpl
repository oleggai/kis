{extends file="orders/orders.tpl"}
{block name='form-orders'}

    {if isset($error)}
        <span style="color: red">{$error}</span>
    {/if}
    {if isset($success)}
        <span style="color: blue">{$success}</span>
    {/if}

    <form method="post" action="{$smarty.const.URL}{$controller}/{$action}">
        <select name='customer'>
            {foreach $customers as $customer}
                <option value="{$customer->getIdCustomer()}">{$customer->getNameCustomer()}</option>
            {/foreach}
        </select>
        <select name='product'>
            {foreach $products as $product}
                <option value="{$product->getIdProduct()}">{$product->getName()}</option>
            {/foreach}
        </select>
        <input type="number" name="count" placeholder="Кількість">
        <input type="number" name="paid" placeholder="Вартість">
        <input type="datetime-local" name="registration-date">
        <input type="datetime-local" name="execution-date">
        <input type="submit" value="send">
    </form>
{/block}