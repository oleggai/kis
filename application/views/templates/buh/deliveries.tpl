{extends file="layouts/main.tpl"}
{block name='content'}
    <table class="tg">
        <tr>
            <th class="tg-izya">ID Поставки</th>
            <th class="tg-izya">Постачальник</th>
            <th class="tg-izya">Сировина</th>
            <th class="tg-izya">Кількість</th>
            <th class="tg-izya">Вартість</th>
            <th class="tg-izya">Дата</th>
        </tr>
        {foreach $deliveries as $delivery}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$delivery->getIdDelivery()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$delivery->getSupplier()->getNameSupplier()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$delivery->getRaw()->getName()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$delivery->getCount()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$delivery->getPaid()} грн</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$delivery->getDate()->format('Y-m-d H:i:s')}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}