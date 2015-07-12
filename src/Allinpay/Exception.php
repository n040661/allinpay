<?php
/**
 * Exception.php
 *
 * Part of Allinpay.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 *
 * @author    Fackeronline <1077341744@qq.com>
 * @link      https://github.com/Fakeronline
 */
 
namespace Allinpay;
use Exception as BaseException;

class Exception extends BaseException{

    protected $errors = [
        '00000' => '请联系客服',
        '00001' => '未知的报文参数验证错误',
        '00002' => '未知的交易处理参数配置错误',
        '10001' => '不支持的字符编码格式',
        '10002' => '参数取货地址不正确',
        '10003' => '参数通知地址不正确',
        '10004' => '参数签名类型不正确',
        '10005' => '参数语言类型不正确',
        '10006' => '参数支付方式不正确',
        '10007' => '参数扩展参数2不正确',
        '10008' => '参数扩展参数1不正确',
        '10009' => '参数产品描述信息部正确',
        '10010' => '参数产品代码不正确',
        '10011' => '参数产品数量不正确',
        '10012' => '参数产品名称不正确',
        '10013' => '参数订单提交时间不正确',
        '10014' => '参数订单金额不正确',
        '10015' => '参数订单号不正确',
        '10016' => '参数付款人的email地址不正确',
        '10017' => '参数付款人的电话不正确',
        '10018' => '参数付款人名称不正确',
        '10019' => '参数报文版本号不正确',
        '10020' => '参数签名信息不正确',
        '10021' => '参数发卡机构号不正确',
        '10022' => '参数网银直连支付参数不正确',
        '10023' => '参数查询时间不正确',
        '10024' => '参数查询开始时间不正确',
        '10025' => '参数查询结束时间不正确',
        '10026' => '参数异步接收查询结果的URL地址不正确',
        '10027' => '该笔订单不存在',
        '10028' => '该笔订单不符合退款条件',
        '20001' => '报文编码格式错误',
        '30001' => '系统参数配置错误',
        '30002' => '订单已经支付成功',
        '30003' => '不能重复提交订单',
        '30004' => '原订单不存在',
        '30005' => '商户支付配置错误',
        '40001' => '商户未被授权接入系统',
        '50001' => '系统繁忙,请稍后再试',
        '50055' => '密码不正确',
        '50056' => '卡不存在',
        '50003' => '商户无效',
        '50014' => '无效卡号',
        '50075' => '密码输入次数超限',
        'TX10001' => '不支持的字符编码格式',
        'TX10002' => '取货地址和通知地址不能同时为空',
        'TX10003' => '取货地址不合法',
        'TX10004' => '通知地址不合法',
        'TX10005' => '版本号不合法',
        'TX10006' => '商户号不合法',
        'TX10007' => '付款人名称不合法',
        'TX10008' => '付款人的email地址不合法',
        'TX10009' => '订单号不合法',
        'TX10010' => '订单金额不合法',
        'TX10011' => '订单时间不能为空',
        'TX10012' => '订单时间不合法',
        'TX10013' => '产品名称不合法',
        'TX10014' => '产品代码不合法',
        'TX10015' => '产品描述信息不合法',
        'TX10016' => '扩展参数1不合法',
        'TX10017' => '扩展参数2不合法',
        'TX10018' => '支付方式不合法',
        'TX10019' => '签名类型不合法',
        'TX10025' => '未指定支付方式',
        'TX10026' => '付款人证件号不合法',
        'TX10027' => '付款人支付卡号不合法',
        'TX10029' => '币种非人民币时，贸易类型不能为空',
        'TX10030' => '查询时间不合法',
        'TX10031' => '查询时间不能为空',
        'MOQ00000' => '未知错误',
        'MOQ00001' => '参数版本号不合法',
        'MOQ00002' => '参数商户号不合法',
        'MOQ00003' => '参数订单开始时间不合法',
        'MOQ00004' => '参数订单结束时间不合法',
        'MOQ00005' => '参数页码不合法',
        'MOQ00006' => '参数签名方式号不合法',
        'MOQ00007' => '参数签名信息不合法',
        'MOQ00008' => '验证签名失败',
        'MOQ00009' => '签名失败',
        'MOQ00010' => '商户订单记录查询失败'
    ];

    public function __construct($message = '', $code = 'MOQ00000')
    {
        $message = empty($this->errors[$code]) ? $this->message : $this->errors[$code] . "[{$code}]";

        parent::__construct($message);
    }

}
