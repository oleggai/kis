{extends file="layouts/main.tpl"}
{block name='content'}

    {block name='form-suppliers'}

    {/block}

    <table class="tg">
        <tr>
            <th class="tg-izya">ID Постачальника</th>
            <th class="tg-izya">ФІО</th>
            <th class="tg-izya">Адреса</th>
            <th class="tg-izya">Телефон</th>
            <th class="tg-izya">Банк</th>
        </tr>
        {foreach $suppliers as $supplier}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$supplier->getIdSupplier()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$supplier->getNameSupplier()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$supplier->getAddress()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$supplier->getPhone()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$supplier->getBank()->getNameBank()}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}