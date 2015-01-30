{extends file="layouts/main.tpl"}
{block name='content'}

    {block name='form-banks'}

    {/block}

    <table class="tg">
        <tr>
            <th class="tg-izya">ID Банку</th>
            <th class="tg-izya">Назва</th>
        </tr>
        {foreach $banks as $bank}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$bank->getIdBank()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$bank->getNameBank()}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}