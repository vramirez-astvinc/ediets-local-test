ModoAuth.panel.Home = function(config) {
    config = config || {};
    Ext.apply(config,{
        border: false
        ,baseCls: 'modx-formpanel'
        ,cls: 'container'
        ,items: [{
            html: '<h2>'+_('modoauth.management')+'</h2>'
            ,border: false
            ,cls: 'modx-page-header'
        },{
            xtype: 'modx-tabs'
            ,defaults: { border: false ,autoHeight: true }
            ,border: true
            ,items: [{
                title: _('modoauth')
                ,defaults: { autoHeight: true }
                ,items: [{
                    html: '<p>'+_('modoauth.management_desc')+'</p>'
                    ,border: false
                    ,bodyCssClass: 'panel-desc'
                },{
                    xtype: 'modoauth-grid-modoauth'
                    ,cls: 'main-wrapper'
                    ,preventRender: true
                }]
            }]
            // only to redo the grid layout after the content is rendered
            // to fix overflow components' panels, especially when scroll bar is shown up
            ,listeners: {
                'afterrender': function(tabPanel) {
                    tabPanel.doLayout();
                }
            }
        }]
    });
    ModoAuth.panel.Home.superclass.constructor.call(this,config);
};
Ext.extend(ModoAuth.panel.Home,MODx.Panel);
Ext.reg('modoauth-panel-home',ModoAuth.panel.Home);


