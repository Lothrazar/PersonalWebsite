/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//alert('app.js');//it loads
//do an ext on ready and then load the pieces i need - grids . probs not forms.

(function()
{
    console.log(Ext);
    console.log('app.js');

//my js extensions

String.prototype.capitalizeFirst = function()
{
    return this.charAt(0).toUpperCase() + this.slice(1);
};

//my Ext settings and extensions

Ext.QuickTips.init();

Ext.Loader.setConfig(
{
    enabled : true,
    paths :
    {
        Sam : 'js/ext'
    }
});

Ext.Ajax.defaultHeaders =
{
    'Accept' : 'application/json',
    'Content-Type' : 'application/json'
};

Ext.Ajax.on('requestexception', function(o, e)
{ 
    if (e.status && e.responseText)// these may not exist
    {
        Ext.Msg.alert('Error',e.responseText);
    }
    else//assume that database connection failed
    {
        Ext.Msg.alert('Error',"500 : Could not connect to database 'tracker'");
    }
}); 




})();
 