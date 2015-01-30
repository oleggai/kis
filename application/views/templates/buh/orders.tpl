{extends file="layouts/main.tpl"}
{block name='content'}
    <table class="tg">
        <tr>
            <th class="tg-izya">ID Замовлення</th>
            <th class="tg-izya">Замовник</th>
            <th class="tg-izya">Продукт</th>
            <th class="tg-izya">Кількість</th>
            <th class="tg-izya">Дата регістрації</th>
            <th class="tg-izya">Дата кінцева</th>
            <th class="tg-izya">Сума</th>
        </tr>
        {foreach $orders as $order}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$order->getIdOrder()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$order->getCustomer()->getNameCustomer()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$order->getProduct()->getName()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$order->getCount()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$order->getRegistrationDate()->format('Y-m-d H:i:s')}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$order->getExecutionDate()->format('Y-m-d H:i:s')}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$order->getPaid()} грн</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}