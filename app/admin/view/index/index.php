<extend file='resource/view/master'/>
<block name="content">
    <table class="table table-hover">
        <tbody>
        <tr>
            <th class="active" colspan="10">温馨提示</th>
        </tr>
        <tr>
            <td colspan="10" style="color:red;">您当前的后台入口为默认的 (admin.php) 还未修改，将存在安全隐患，请及时通过FTP修改。</td>
        </tr>
        <tr>
            <th class="active" colspan="10">系统公告</th>
        </tr>
        <tr>
            <td colspan="10">HDBLOG_EDU是国内唯一真正的百分百免费开源产品，可以用在任何网站（包括商业网站），您不用担心任何版权问题。</td>
        </tr>
        <tr>
            <th class="active" colspan="10">文章统计</th>
        </tr>
        <foreach from="$allCateData" key="$k" value="$v">
        <tr>
            <td>{{$v['cname']}}</td>
            <td colspan="5">{{$v['total']}}篇</td>
        </tr>
        </foreach>
            <th class="active" colspan="10">系统信息</th>
        </tr>
        <tr>
            <td>核心框架</td>
            <td colspan="5">Hdphp3.0</td>
        </tr>
        <tr>
            <td>blog版本号</td>
            <td colspan="5">v1.0.3</td>
        </tr>
        <tr>
            <td>运行环境</td>
            <td colspan="5"><?php echo PHP_OS;?></td>
        </tr>
        <tr>
            <td>开发者</td>
            <td colspan="5">jianbs</td>
        </tr>
        </tbody>
    </table>
</block>