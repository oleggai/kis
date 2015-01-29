{extends file="layouts/main.tpl"}
{block name='content'}
    <table class="tg">
        <tr>
            <th class="tg-izya">ID Виробничого процеса</th>
            <th class="tg-izya">Працівник</th>
            <th class="tg-izya">Обладнання</th>
            <th class="tg-izya">Продукт</th>
            <th class="tg-izya">Кількість</th>
            <th class="tg-izya">Дата виготовлення</th>
        </tr>
        {foreach $industrialProcesses as $industrialProcess}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$industrialProcess->getIdIndustrialProcess()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$industrialProcess->getWorker()->getFullname()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$industrialProcess->getEquipment()->getName()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$industrialProcess->getProduct()->getName()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$industrialProcess->getProductsCount()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$industrialProcess->getDate()->format('Y-m-d H:i:s')}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}