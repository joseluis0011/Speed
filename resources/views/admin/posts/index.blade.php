@extends('admin.layout')
@section('header')
  <ul class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{route('admin')}}">Inicio</a></li>
    <li class="breadcrumb-item"><span>Editar</span></li>
  </ul>
@stop
@section('content')





        <div class="element-box col-sm-12">
          <div class="element-head">
            <div class="project-title"><h5>Configurar Pagina Web</h5></div>
          </div>
          <div class="element-info">

                    <div class="el-tablo highlight">
                      <div class="label">Home</div>
                      <hr>
                      <form method="post" action="{{route('saveData')}}">
                        {{csrf_field()}}
                        <input type="hidden" name="part" value="1">
                        <textarea name="body" id="editor2">
                        {{$body[0]->body}}
                         </textarea>
                      </form>
                    </div>

                    <div class="el-tablo highlight">
                      <div class="label">Main</div>
                      <hr>
                         <form method="post" action="{{route('saveData')}}">
                           {{csrf_field()}}
                           <input type="hidden" name="part" value="2">
                           <textarea name="body" id="editor">
                           {{$body[1]->body}}
                           </textarea>
                          </form>
                    </div>
              </div>
        </div>
        <!--------------------
       START - Color Scheme Toggler
       -------------------->
        <div class="floated-colors-btn second-floated-btn">
          <div class="os-toggler-w">
            <div class="os-toggler-i">
              <div class="os-toggler-pill"></div>
            </div>
          </div>
          <span>Dark </span><span>Colors</span>
        </div>
        <!--------------------
        END - Color Scheme Toggler
        -------------------->

        <!--------------------
       START - Demo Customizer
       -------------------->
        <div class="floated-customizer-btn third-floated-btn">
          <div class="icon-w"><i class="os-icon os-icon-ui-46"></i></div>
          <span>Customizer</span></div>
        <div class="floated-customizer-panel">
          <div class="fcp-content">
            <div class="close-customizer-btn"><i class="os-icon os-icon-x"></i></div>
            <div class="fcp-group">
              <div class="fcp-group-header">Menu Settings</div>
              <div class="fcp-group-contents">
                <div class="fcp-field"><label for="">Menu Position</label><select
                          class="menu-position-selector">
                    <option value="left">Left</option>
                    <option value="right">Right</option>
                    <option value="top">Top</option>
                  </select></div>
                <div class="fcp-field"><label for="">Menu Style</label><select
                          class="menu-layout-selector">
                    <option value="compact">Compact</option>
                    <option value="full">Full</option>
                    <option value="mini">Mini</option>
                  </select></div>
                <div class="fcp-field with-image-selector-w"><label for="">With Image</label><select
                          class="with-image-selector">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select></div>
                <div class="fcp-field"><label for="">Menu Color</label>
                  <div class="fcp-colors menu-color-selector">
                    <div class="color-selector menu-color-selector color-bright selected"></div>
                    <div class="color-selector menu-color-selector color-dark"></div>
                    <div class="color-selector menu-color-selector color-light"></div>
                    <div class="color-selector menu-color-selector color-transparent"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fcp-group">
              <div class="fcp-group-header">Sub Menu</div>
              <div class="fcp-group-contents">
                <div class="fcp-field"><label for="">Sub Menu Style</label><select
                          class="sub-menu-style-selector">
                    <option value="flyout">Flyout</option>
                    <option value="inside">Inside/Click</option>
                    <option value="over">Over</option>
                  </select></div>
                <div class="fcp-field"><label for="">Sub Menu Color</label>
                  <div class="fcp-colors">
                    <div class="color-selector sub-menu-color-selector color-bright selected"></div>
                    <div class="color-selector sub-menu-color-selector color-dark"></div>
                    <div class="color-selector sub-menu-color-selector color-light"></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="fcp-group">
              <div class="fcp-group-header">Other Settings</div>
              <div class="fcp-group-contents">
                <div class="fcp-field"><label for="">Full Screen?</label><select
                          class="full-screen-selector">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select></div>
                <div class="fcp-field"><label for="">Show Top Bar</label><select
                          class="top-bar-visibility-selector">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select></div>
                <div class="fcp-field"><label for="">Above Menu?</label><select
                          class="top-bar-above-menu-selector">
                    <option value="yes">Yes</option>
                    <option value="no">No</option>
                  </select></div>
                <div class="fcp-field"><label for="">Top Bar Color</label>
                  <div class="fcp-colors">
                    <div class="color-selector top-bar-color-selector color-bright selected"></div>
                    <div class="color-selector top-bar-color-selector color-dark"></div>
                    <div class="color-selector top-bar-color-selector color-light"></div>
                    <div class="color-selector top-bar-color-selector color-transparent"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--------------------
       END - Demo Customizer
       -------------------->
        <!--------------------
        START - Chat Popup Box
        -------------------->

        <div class="floated-chat-btn"><i class="os-icon os-icon-mail-07"></i><span>Demo Chat</span></div>
        <div class="floated-chat-w">
          <div class="floated-chat-i">
            <div class="chat-close"><i class="os-icon os-icon-close"></i></div>
            <div class="chat-head">
              <div class="user-w with-status status-green">
                <div class="user-avatar-w">
                  <div class="user-avatar"><img alt="" src="/assets/img/avatar1.jpg"></div>
                </div>
                <div class="user-name"><h6 class="user-title">John Mayers</h6>
                  <div class="user-role">Account Manager</div>
                </div>
              </div>
            </div>
            <div class="chat-messages">
              <div class="message">
                <div class="message-content">Hi, how can I help you?</div>
              </div>
              <div class="date-break">Mon 10:20am</div>
              <div class="message">
                <div class="message-content">Hi, my name is Mike, I will be happy to assist you
                </div>
              </div>
              <div class="message self">
                <div class="message-content">Hi, I tried ordering this product and it keeps showing
                  me error code.
                </div>
              </div>
            </div>
            <div class="chat-controls"><input class="message-input"
                                              placeholder="Type your message here..." type="text">
              <div class="chat-extra"><a href="#"><span class="extra-tooltip">Attach Document</span><i
                          class="os-icon os-icon-documents-07"></i></a><a href="#"><span
                          class="extra-tooltip">Insert Photo</span><i
                          class="os-icon os-icon-others-29"></i></a><a href="#"><span
                          class="extra-tooltip">Upload Video</span><i
                          class="os-icon os-icon-ui-51"></i></a></div>
            </div>
          </div>
        </div>
        <!--------------------
        END - Chat Popup Box
        -------------------->
@endsection
@section('script_top')
    <script src="{{asset('js/plugins/ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace('editor');
        CKEDITOR.replace('editor2');
        var conf_before = "";
        $('.fcp-content').change(function (val) {
            conf_before = $('#config_menu').attr('class');
           $.get('{{route('setConfigUser')}}'+'?iduser='+'{{auth()->id()}}'+'&&value='+conf_before,function (data) {
               console.log(data);
           })
        })
    </script>
@endsection
