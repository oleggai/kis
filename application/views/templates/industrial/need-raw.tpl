{extends file="layouts/main.tpl"}
{block name='content'}

    {block name = 'form-need-raw'}

    {/block}

    <table class="tg">
        <tr>
            <th class="tg-izya">ID Need Raw</th>
            <th class="tg-izya">Продукт</th>
            <th class="tg-izya">Сировина</th>
            <th class="tg-izya">Кількість</th>
        </tr>
        {foreach $needRaws as $needRaw}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$needRaw->getIdNeedraw()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$needRaw->getProduct()->getName()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$needRaw->getRaw()->getName()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$needRaw->getAmountRaw()} кг</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}