{extends file="layouts/main.tpl"}
{block name='content'}

    {block name='form-workers'}

    {/block}

    <table class="tg">
        <tr>
            <th class="tg-izya">ID Працівника</th>
            <th class="tg-izya">ФІО</th>
            <th class="tg-izya">Стаж</th>
        </tr>
        {foreach $workers as $worker}
            <tr>
                <td class="tg-s6z2" style="width: 20%;">
                    {$worker->getIdWorker()}
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$worker->getFullname()}</span>
                </td>
                <td class="tg-s6z2">
                    <span class="td-table">{$worker->getExperience()}</span>
                </td>
            </tr>
        {/foreach}
    </table>
{/block}