{if $node|has_attribute( 'fonte' )}
    <div class="related-panel">
        <div class="row">
            <div class="col-xs-8">
                <h3>fonte</h3>
            </div>
            <div class="col-xs-4 text-right">
                <span class="fa-stack fa-3x related-icon">
                    <i class="fa fa-circle fa-stack-2x fa-inverse"></i>
                    <i class="fa fa-code-fork fa-stack-1x"></i>
                </span>
            </div>
        </div>

    {attribute_view_gui attribute=$node|attribute( 'fonte' )}
    </div>
{/if}
