/**
 * 
 */
String.prototype.cut = function(len) {
            var position = 0;
            var result = [];
            var tale = '';
            for (var i = 0; i < this.length; i++) {
                if (position >= len) {
                    tale = '...';
                    break;
                }
                if (this.charCodeAt(i) > 255) {
                    position += 2;
                    result.push(this.substr(i, 1));
                }
                else {
                    position++;
                    result.push(this.substr(i, 1));
                }
            }
            return result.join("") + tale;
        };

        $().ready(function() {
            $('#target_id').jCheckbox({
                maxlength: 10,
                onChange: function(e) {
                    window.console && console.log('value of %o is %s[checked=%s]', this, e.val(), e.attr('checked'));
                }
            });
            $('#age_id').jCheckbox({
                maxlength: 30,
                onChange: function(e) {
                    window.console && console.log('value of %o is %s[checked=%s]', this, e.val(), e.attr('checked'));
                }
            })
        });