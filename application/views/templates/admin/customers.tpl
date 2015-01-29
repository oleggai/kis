{extends file="layouts/main.tpl"}
{block name='content'}
    <table class="tg">
        <tr>
            <th class="tg-izya">ID Замовника</th>
            <th class="tg-izya">ФІО</th>
            <th class="tg-izya">Адреса</th>
            <th class="tg-izya">Телефон</th>
        </tr>
        {foreach $customers as $customer}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$customer->getIdCustomer()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$customer->getNameCustomer()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$customer->getAddress()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$customer->getPhone()}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}