//字符串长度-中文和全角符号为1，英文、数字和半角为0.5
var getLength = function(str, shortUrl) {
	if (true == shortUrl) {
		return Math.ceil(str.replace(/((news|telnet|nttp|file|http|ftp|https):\/\/){1}(([-A-Za-z0-9]+(\.[-A-Za-z0-9]+)*(\.[-A-Za-z]{2,5}))|([0-9]{1,3}(\.[0-9]{1,3}){3}))(:[0-9]*)?(\/[-A-Za-z0-9_\$\.\+\!\*\(\),;:@&=\?\/~\#\%]*)*/ig, 'http://goo.gl/fkKB ')
							.replace(/^\s+|\s+$/ig,'').replace(/[^\x00-\xff]/ig,'xx').length/2);
	} else {
		return Math.ceil(str.replace(/^\s+|\s+$/ig,'').replace(/[^\x00-\xff]/ig,'xx').length/2);
	}
};
var subStr = function (str, len) {
    if(!str) { return ''; }
        len = len > 0 ? len*2 : 280;
    var count = 0,	//计数：中文2字节，英文1字节
        temp = '';  //临时字符串
    for (var i = 0;i < str.length;i ++) {
    	if (str.charCodeAt(i) > 255) {
        	count += 2;
        } else {
        	count ++;
        }
        //如果增加计数后长度大于限定长度，就直接返回临时字符串
        if(count > len) { return temp; }
        //将当前内容加到临时字符串
         temp += str.charAt(i);
    }
    return str;
};

function textTrim(str) {//过滤字符串两边的空格，用于提交表单的时候，验证表单的时候，一般在check函数中，查看各个表单是否有空格
	return str.replace(/(^\s*)|(\s*$)/g,"");
}

function xround(x,num){
    return Math.round(x * Math.pow(10, num)) / Math.pow(10, num) ;
}