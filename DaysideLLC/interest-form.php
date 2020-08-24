<?php
require('header.php');
?>

<div class="container testimonialsContainer" id="contact">
    <!-- html content for 1st part of form, look out comment lines as division for readability-->
    <div class="container pt-3 my-5 bg-info interestForm" id="tellUs">
        <h2 class="text-center">Tell us more about you</h2>
        <p class="required">(* = required)</p><br><br>

        <form id="iForm" action="confirm.php" method="post" class="mt-5">
            <div class="row"> <!-- first name last name organization row-->
                <div class="col-md-4 mb-3">
                    <label for="fName">First name</label>
                    <span class="required">*</span>
                    <input type="text" class="form-control" id="fName" name="fName" placeholder="First name">
                    <span class="err" id="errFname">&#9888; Please enter a first name</span>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="lName">Last name</label>
                    <span class="required">*</span>
                    <input type="text" class="form-control" id="lName" name="lName" placeholder="Last name">
                    <span class="err" id="errLname">&#9888; Please enter a last name</span>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="orgName">Organization</label>
                    <input type="text" class="form-control" id="orgName" name="orgName" placeholder="Organization">
                </div>
            </div>
            <div class="row"> <!-- email phone number title row-->
                <div class="col-md-4 mb-3">
                    <label for="email">Email</label>
                    <span class="required">*</span>
                    <input type="text" class="form-control" id="email" name="email" placeholder="you@example.com">
                    <span class="err" id="errEmail">&#9888; Please enter your email</span>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="phone">Phone Number</label>
                    <span class="required">*</span>
                    <input type="tel" class="form-control" id="phone" name="phone" placeholder="(xxx)-xxx-xxxx">
                    <span class="err" id="errPhone">&#9888; Please enter phone number</span>
                </div>
            </div>
            <hr>

            <div class="row"> <!-- city state zip row-->
                <div class="col-md-4 mb-4">
                    <label for="street">Street</label>
                    <input type="text" class="form-control" id="street" name="street" placeholder="Street">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="cityName">City</label>
                    <input type="text" class="form-control" id="cityName" name="cityName" placeholder="City">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="state">State</label>
                    <input type="text" class="form-control" id="state" name="state" placeholder="State">
                </div>
                <div class="col-md-4 mb-4">
                    <label for="zip">Zip</label>
                    <input type="text" class="form-control" id="zip" name="zip" placeholder="Zip">
                </div>
            </div>
            <hr>

            <!-- The below is 2nd part which about customer's interest and gather more info from them -->
            <div class="row">
                <!-- industry the customer in, services may interested in, how did they hear about us row -->
                <div class="col-md-4 mb-3 serviceList">
                    <label>What industry are you in
                        <select id="industryList" name="industryList" class="custom-select serviceListBox">
                            <option value="none" selected>----------Please Select----------</option>
                            <option value="consumer">Consumer</option>
                            <option value="financial">Financial Services</option>
                            <option value="technology">Technology</option>
                            <option value="media">Media</option>
                            <option value="communications">Communications</option>
                            <option value="government">Government</option>
                        </select></label>
                </div>
                <div class="col-md-4 mb-3 serviceList">
                    <label>What services are you interested in
                        <select id="serviceList" name="serviceList" class="custom-select serviceListBox">
                            <option value="none" selected>----------Please Select----------</option>
                            <option value="Leadership">Leadership</option>
                            <option value="Managing Change">Managing Change</option>
                            <option value="Team Effectiveness">Team Effectiveness</option>
                            <option value="morale">Morale</option>
                            <option value="Organizational Communication">Organizational Communication</option>
                            <option value="Constructive Climate">Constructive Climate</option>
                        </select></label>
                </div>
                <div class="col-md-4 mb-3 serviceList">
                    <label>How did you hear about us
                        <select id="howYouHearUs" name="howYouHearUs" class="custom-select howYouHearUs">
                            <option value="none" selected>----------Please Select----------</option>
                            <option value="person">From a friend</option>
                            <option value="web">Online</option>
                            <option value="face">Face to Face</option>
                            <option value="other">Other</option>
                        </select></label>
                </div>
            </div>
            <div class="row"> <!-- crisis Y or N, ways to get training,  -->
                <div class="col-md-4 mb-3">
                    <label>Are you in crisis?&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" name="crisis" id="yCrisis" value="Yes">
                    <label for="yCrisis">Yes&nbsp;&nbsp;&nbsp;</label>
                    <input type="radio" name="crisis" id="nCrisis" value="No">
                    <label for="nCrisis">No</label><br>
                    <label for="describeY">Please describe if yes</label>
                    <textarea class="form-control" id="describeY" name="describeY"></textarea>
                </div>
                <div class="col-md-4 mb-3">
                    <label>Which do you prefer to consult:</label><br>
                    <div class="check-box">
                        <input type="radio" name="consult" id="consulting" value="One-on-one consulting">
                        <label for="consulting">One-on-one consulting</label><br>
                    </div>
                    <div class="check-box">
                        <input type="radio" name="consult" id="groupFormat" value="Group Format">
                        <label for="groupFormat">Group Format</label><br>
                    </div>
                    <div class="check-box">
                        <input type="radio" name="consult" id="virtual" value="Virtual">
                        <label for="virtual">Virtual</label><br>
                    </div>
                    <div class="check-box">
                        <input type="radio" name="consult" id="notSure" value="I'm not sure">
                        <label for="notSure">I'm not sure</label>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <label for="comment">Comment</label>
                    <textarea class="form-control" id="comment" name="comment"></textarea>
                </div>
            </div>
            <div>  <!-- disclaimer-->
                <p>&#8594;<strong>Disclaimer</strong>: if you should choose to provide us with personal information
                    by
                    filling out the form and submitting it to us - we will use that information to respond to your
                    message and to help us get the information you have requested. Dayside LLC does not collect
                    personal
                    information for commercial marketing or distribution to any private organizations.</p>
            </div>
            <button type="submit" class="btn btn-lg btn-primary" id="submit-btn">submit</button>
        </form>
    </div>
</div>

<!-- footer starts -->
<!-- source: https://codepen.io/fanggeyanhua/pen/vYErKVa -->
<div id="page-container">
    <footer class="footer fixed-bottom admin-footer position-relative">
        <div class="main"></div>
        <div class="bubble-footer">
            <div class="bubble-subfooter">
                <div class="bubbles">
                    <div class="bubble"
                         style="--size:4.8598393672919675rem; --distance:9.788311042921434rem; --position:7.550842222793712%; --time:2.417865505768686s; --delay:-2.9949129663952077s;"></div>
                    <div class="bubble"
                         style="--size:2.7592659525459364rem; --distance:8.917083772559312rem; --position:27.641298112994868%; --time:2.6521181400982217s; --delay:-2.155715954057113s;"></div>
                    <div class="bubble"
                         style="--size:5.591712903137544rem; --distance:6.446140380433716rem; --position:102.81410174457471%; --time:2.2736322246314202s; --delay:-2.134270376242728s;"></div>
                    <div class="bubble"
                         style="--size:5.245263144445984rem; --distance:6.152537974303806rem; --position:-0.9513112861011308%; --time:3.5122607274279147s; --delay:-2.6632154949069022s;"></div>
                    <div class="bubble"
                         style="--size:5.020857906137947rem; --distance:6.653264397818085rem; --position:18.897273232182748%; --time:3.0215545994120565s; --delay:-2.689447859761638s;"></div>
                    <div class="bubble"
                         style="--size:4.910141420126891rem; --distance:8.220986534391344rem; --position:76.31990609333023%; --time:2.851585926391253s; --delay:-3.7797956899883065s;"></div>
                    <div class="bubble"
                         style="--size:3.7140188378992995rem; --distance:8.404750375896313rem; --position:94.48930593550517%; --time:2.59615445301813s; --delay:-3.4381409455709995s;"></div>
                    <div class="bubble"
                         style="--size:3.6200136933006934rem; --distance:8.761791209615996rem; --position:89.40530658758898%; --time:3.3575743402025746s; --delay:-3.482992159227038s;"></div>
                    <div class="bubble"
                         style="--size:5.0305036681151085rem; --distance:9.702112248195494rem; --position:88.09410638408%; --time:3.468300897066962s; --delay:-2.3961669671666583s;"></div>
                    <div class="bubble"
                         style="--size:4.796200874100483rem; --distance:8.40341562157763rem; --position:20.0433332816941%; --time:3.1318577723612004s; --delay:-2.217558199010382s;"></div>
                    <div class="bubble"
                         style="--size:2.151120894160818rem; --distance:7.643202097927687rem; --position:36.166574640553854%; --time:2.4484694588757168s; --delay:-2.8837090696080527s;"></div>
                    <div class="bubble"
                         style="--size:4.741948869127157rem; --distance:9.373156385131448rem; --position:5.327236598177503%; --time:2.8873386518849835s; --delay:-2.0539975591772777s;"></div>
                    <div class="bubble"
                         style="--size:3.904395603149969rem; --distance:9.938152539856056rem; --position:51.83773243372563%; --time:3.6335278534628617s; --delay:-3.8629563181123943s;"></div>
                    <div class="bubble"
                         style="--size:4.881573737536266rem; --distance:6.005220986504605rem; --position:95.59720766938614%; --time:3.02949562342742s; --delay:-3.4628140682771997s;"></div>
                    <div class="bubble"
                         style="--size:4.434339704746249rem; --distance:9.59640646361315rem; --position:90.14044739952446%; --time:3.7609135836920022s; --delay:-2.9440559293886017s;"></div>
                    <div class="bubble"
                         style="--size:5.460053319923264rem; --distance:8.637701641405382rem; --position:67.81205329679399%; --time:3.988995578929818s; --delay:-3.8965707752872514s;"></div>
                    <div class="bubble"
                         style="--size:4.0922771976976025rem; --distance:6.376788376011076rem; --position:72.08803475667158%; --time:2.037876482654461s; --delay:-2.542761821468194s;"></div>
                    <div class="bubble"
                         style="--size:2.6751840576403216rem; --distance:9.018666189610862rem; --position:83.78954027746614%; --time:3.143906236202557s; --delay:-3.854701509610115s;"></div>
                    <div class="bubble"
                         style="--size:5.381422756818371rem; --distance:7.744380702638979rem; --position:16.611104524615044%; --time:2.1397968686839333s; --delay:-3.685153221333816s;"></div>
                    <div class="bubble"
                         style="--size:2.572014504560821rem; --distance:7.037070313622688rem; --position:51.19040892395118%; --time:3.4777375477861656s; --delay:-2.4388914069919587s;"></div>
                    <div class="bubble"
                         style="--size:3.8556928548619567rem; --distance:7.376346987012414rem; --position:101.11126908692444%; --time:2.4972358667420416s; --delay:-3.1878700733548517s;"></div>
                    <div class="bubble"
                         style="--size:4.890372093807729rem; --distance:9.584950315524235rem; --position:25.373490640564164%; --time:3.854916695115719s; --delay:-3.3733653619320347s;"></div>
                    <div class="bubble"
                         style="--size:5.866803299020537rem; --distance:6.3478279940649776rem; --position:72.849494208247%; --time:2.4763542153963365s; --delay:-2.5498990424648267s;"></div>
                    <div class="bubble"
                         style="--size:2.654880222622136rem; --distance:8.495395061289791rem; --position:56.26091603662163%; --time:3.0490291805629326s; --delay:-3.2015732178977605s;"></div>
                    <div class="bubble"
                         style="--size:2.3761935308281963rem; --distance:6.936648246763028rem; --position:77.25667337878045%; --time:3.3800504910138685s; --delay:-3.161770074800023s;"></div>
                    <div class="bubble"
                         style="--size:2.395465246555065rem; --distance:6.570775801269408rem; --position:32.563395499427166%; --time:2.4877391304152945s; --delay:-3.341571261977942s;"></div>
                    <div class="bubble"
                         style="--size:4.502650705924872rem; --distance:9.478699717863453rem; --position:97.87196894094758%; --time:3.996404692742428s; --delay:-2.6493312636132855s;"></div>
                    <div class="bubble"
                         style="--size:4.325303676417257rem; --distance:9.776697425523512rem; --position:92.03529433287879%; --time:2.6219721770373803s; --delay:-3.858985547579655s;"></div>
                    <div class="bubble"
                         style="--size:4.098935116708481rem; --distance:6.626607683407789rem; --position:104.51557363912143%; --time:2.710880865547015s; --delay:-3.1515726494000478s;"></div>
                    <div class="bubble"
                         style="--size:3.2089533632883374rem; --distance:8.481986515742065rem; --position:45.68077508838109%; --time:2.732870705490233s; --delay:-3.499774556178174s;"></div>
                    <div class="bubble"
                         style="--size:5.791273328689405rem; --distance:6.017290983512537rem; --position:20.6303955925089%; --time:3.9053016408167203s; --delay:-2.3354447990040366s;"></div>
                    <div class="bubble"
                         style="--size:4.368585054286192rem; --distance:6.194714848735435rem; --position:33.710760522061506%; --time:3.0611365368829837s; --delay:-2.793692282120272s;"></div>
                    <div class="bubble"
                         style="--size:4.140900932355893rem; --distance:6.166926459136986rem; --position:33.11441542556391%; --time:2.1642399241985335s; --delay:-3.0081807760708403s;"></div>
                    <div class="bubble"
                         style="--size:5.05609159025231rem; --distance:6.207823664885137rem; --position:24.08575801195642%; --time:3.200048335378044s; --delay:-2.098753816428119s;"></div>
                    <div class="bubble"
                         style="--size:3.6400384436225517rem; --distance:6.464267564772134rem; --position:97.53108545860765%; --time:3.211450507216851s; --delay:-3.318271871570619s;"></div>
                    <div class="bubble"
                         style="--size:5.84655947080711rem; --distance:8.159031845373502rem; --position:49.07954633328551%; --time:2.335989885145699s; --delay:-3.750009319213806s;"></div>
                    <div class="bubble"
                         style="--size:3.624416859740138rem; --distance:8.72996790264464rem; --position:76.44186478135516%; --time:2.9434420083403228s; --delay:-2.3407474930296184s;"></div>
                    <div class="bubble"
                         style="--size:2.406657425641349rem; --distance:6.2868964782601395rem; --position:22.57461665235487%; --time:3.331320402969347s; --delay:-3.920833718803989s;"></div>
                    <div class="bubble"
                         style="--size:5.162557830025376rem; --distance:9.397054800626105rem; --position:2.090813934897728%; --time:3.471788522863993s; --delay:-2.0586058226441377s;"></div>
                    <div class="bubble"
                         style="--size:5.01346091243163rem; --distance:9.141101813867458rem; --position:86.02149494412987%; --time:2.6769996682058483s; --delay:-2.2260633985545994s;"></div>
                    <div class="bubble"
                         style="--size:5.091036320150119rem; --distance:6.512309779873331rem; --position:37.981206632248295%; --time:3.746993804396407s; --delay:-2.233196285463256s;"></div>
                    <div class="bubble"
                         style="--size:5.754247519572418rem; --distance:7.016356747275135rem; --position:-3.636825184452177%; --time:3.127776662855839s; --delay:-3.279371985794843s;"></div>
                    <div class="bubble"
                         style="--size:4.91961685240245rem; --distance:8.707355240388612rem; --position:51.93917406837091%; --time:3.0222004170582837s; --delay:-3.8022616235335756s;"></div>
                    <div class="bubble"
                         style="--size:2.8984349836457737rem; --distance:6.282769326143884rem; --position:60.53500511938411%; --time:2.718398744243803s; --delay:-2.067140279104414s;"></div>
                    <div class="bubble"
                         style="--size:2.3789260734922317rem; --distance:6.906252220340811rem; --position:44.44914046283744%; --time:2.3996493596881847s; --delay:-3.2914634047609463s;"></div>
                    <div class="bubble"
                         style="--size:3.4057031053319298rem; --distance:9.21452365574375rem; --position:14.539743924311761%; --time:3.2016337636292813s; --delay:-2.4949378897888597s;"></div>
                    <div class="bubble"
                         style="--size:3.1226503139008805rem; --distance:7.24477011510039rem; --position:84.92087825812943%; --time:2.6141769219775464s; --delay:-2.907342189150226s;"></div>
                    <div class="bubble"
                         style="--size:5.3389847078223385rem; --distance:9.452583608233825rem; --position:23.844967059218366%; --time:2.2557596543268392s; --delay:-2.3689402201047933s;"></div>
                    <div class="bubble"
                         style="--size:4.9427385164757505rem; --distance:9.045441307827994rem; --position:12.91948009180443%; --time:2.1968264711730217s; --delay:-3.518138662878655s;"></div>
                    <div class="bubble"
                         style="--size:2.820564975346869rem; --distance:6.165050287481626rem; --position:75.75456674676664%; --time:3.8295525693310317s; --delay:-3.7022408759793097s;"></div>
                    <div class="bubble"
                         style="--size:3.654552702215688rem; --distance:7.052609796018184rem; --position:32.82864833768906%; --time:2.1075971058206187s; --delay:-3.3531942285131247s;"></div>
                    <div class="bubble"
                         style="--size:2.2605254255923946rem; --distance:9.612563373458894rem; --position:54.10683889847642%; --time:3.344225653038294s; --delay:-2.851377317011569s;"></div>
                    <div class="bubble"
                         style="--size:4.381475433954627rem; --distance:6.819162385182566rem; --position:74.7223913302399%; --time:3.9793275560687382s; --delay:-3.3453091751199904s;"></div>
                    <div class="bubble"
                         style="--size:4.712989374906537rem; --distance:7.4851245280678596rem; --position:89.40775270013806%; --time:3.8885628113013433s; --delay:-2.8920008180942234s;"></div>
                    <div class="bubble"
                         style="--size:5.035821308574232rem; --distance:9.24539733081351rem; --position:-4.012879084445322%; --time:3.5462099179039845s; --delay:-2.8833900283715987s;"></div>
                    <div class="bubble"
                         style="--size:5.025531305029359rem; --distance:6.678498101322621rem; --position:-2.271250747696143%; --time:3.2582843936508286s; --delay:-2.110791753599957s;"></div>
                    <div class="bubble"
                         style="--size:4.369864789534263rem; --distance:9.673174100919576rem; --position:98.93816959871965%; --time:3.555325089065112s; --delay:-2.1794257828477863s;"></div>
                    <div class="bubble"
                         style="--size:5.890787219922261rem; --distance:9.429155369987924rem; --position:56.950328420686596%; --time:2.8497584465814336s; --delay:-3.0005830862733367s;"></div>
                    <div class="bubble"
                         style="--size:2.82358878152763rem; --distance:7.691655492509223rem; --position:51.53264410685464%; --time:3.723295513996092s; --delay:-2.5339350852506586s;"></div>
                    <div class="bubble"
                         style="--size:2.4499944300646357rem; --distance:8.707415417496733rem; --position:15.497693863030626%; --time:2.421737616541949s; --delay:-3.4981875058019187s;"></div>
                    <div class="bubble"
                         style="--size:5.039139885692047rem; --distance:9.773413689107374rem; --position:30.641650533647613%; --time:3.571621764220036s; --delay:-3.683602421593598s;"></div>
                    <div class="bubble"
                         style="--size:3.1825274028560093rem; --distance:8.60123070106899rem; --position:7.490864716653016%; --time:2.0563849384401838s; --delay:-3.154819108063958s;"></div>
                    <div class="bubble"
                         style="--size:4.429885994924556rem; --distance:7.295942012154897rem; --position:70.2070113925235%; --time:3.3529341930084895s; --delay:-3.078980582562699s;"></div>
                    <div class="bubble"
                         style="--size:2.5302881046499763rem; --distance:7.136879467897371rem; --position:1.4032661472468337%; --time:2.7414730273427925s; --delay:-2.481899210895425s;"></div>
                    <div class="bubble"
                         style="--size:4.49323260283107rem; --distance:8.184770149694415rem; --position:59.81145544347467%; --time:2.820424463190075s; --delay:-3.7529876078826447s;"></div>
                    <div class="bubble"
                         style="--size:3.1323929682694285rem; --distance:9.556054339175917rem; --position:17.162694009754006%; --time:2.0023106225264513s; --delay:-2.0498806923638497s;"></div>
                    <div class="bubble"
                         style="--size:4.970761396879229rem; --distance:9.603196520401099rem; --position:-1.629299670394735%; --time:3.17284881455512s; --delay:-2.7130374147227445s;"></div>
                    <div class="bubble"
                         style="--size:3.580158774294704rem; --distance:8.009537953712556rem; --position:69.97440332023393%; --time:3.8049459836045485s; --delay:-2.1815044552553813s;"></div>
                    <div class="bubble"
                         style="--size:5.180283819706381rem; --distance:8.838343145083375rem; --position:2.127898960528962%; --time:3.352619837913823s; --delay:-2.256523965502673s;"></div>
                    <div class="bubble"
                         style="--size:4.646871578962293rem; --distance:6.69434382293598rem; --position:85.24277827034348%; --time:3.6065319007342644s; --delay:-2.2298644144751667s;"></div>
                    <div class="bubble"
                         style="--size:3.054558290467213rem; --distance:8.81725039710038rem; --position:43.23926678833494%; --time:2.901681729253116s; --delay:-2.902308810849432s;"></div>
                    <div class="bubble"
                         style="--size:3.212908141596782rem; --distance:8.216436297748423rem; --position:68.55025321042686%; --time:2.420454738540735s; --delay:-3.4539452061043177s;"></div>
                    <div class="bubble"
                         style="--size:3.9571991019646733rem; --distance:6.258614387156628rem; --position:96.9404171160316%; --time:3.806134932657695s; --delay:-2.5428641254658717s;"></div>
                    <div class="bubble"
                         style="--size:4.249883553571604rem; --distance:7.954660744486385rem; --position:30.487569489860178%; --time:2.5075502282272675s; --delay:-2.3325303251005374s;"></div>
                    <div class="bubble"
                         style="--size:5.7192716596628rem; --distance:7.978844053984372rem; --position:65.47669975400767%; --time:3.2117837806017397s; --delay:-3.9241962377673985s;"></div>
                    <div class="bubble"
                         style="--size:4.164706606577284rem; --distance:7.76292889972149rem; --position:72.93398112894982%; --time:3.1593899866244177s; --delay:-3.4106392471339s;"></div>
                    <div class="bubble"
                         style="--size:4.804427791043001rem; --distance:9.280056275406523rem; --position:16.272311590823335%; --time:3.8159187974430693s; --delay:-2.8202286551775453s;"></div>
                    <div class="bubble"
                         style="--size:5.160287280687493rem; --distance:9.303592000258483rem; --position:93.01987927835052%; --time:2.833281240083311s; --delay:-2.7057370931117966s;"></div>
                    <div class="bubble"
                         style="--size:4.39150622289193rem; --distance:8.523452442229267rem; --position:37.634726889287144%; --time:3.915409939963674s; --delay:-3.0146233887980336s;"></div>
                    <div class="bubble"
                         style="--size:3.726777623552806rem; --distance:8.885455281033046rem; --position:16.657427687797743%; --time:3.5447432115836737s; --delay:-2.472067748701895s;"></div>
                    <div class="bubble"
                         style="--size:2.0160669982126223rem; --distance:9.073652272148188rem; --position:52.661979593398605%; --time:2.79830417565159s; --delay:-2.2426101534713374s;"></div>
                    <div class="bubble"
                         style="--size:5.188170974770494rem; --distance:6.815797551235337rem; --position:61.04582215322411%; --time:2.6432914608529328s; --delay:-3.795684381231733s;"></div>
                    <div class="bubble"
                         style="--size:5.797775079848009rem; --distance:7.668474974499929rem; --position:13.323321235061325%; --time:2.93438775278515s; --delay:-3.4451462160931823s;"></div>
                    <div class="bubble"
                         style="--size:3.0013647125835963rem; --distance:7.924188164878503rem; --position:23.52925451132758%; --time:3.4235861499967615s; --delay:-2.5746266137072347s;"></div>
                    <div class="bubble"
                         style="--size:2.794517342757283rem; --distance:9.114086928496176rem; --position:0.40984886685363264%; --time:3.465484238051991s; --delay:-2.294646745077554s;"></div>
                    <div class="bubble"
                         style="--size:2.4367338239255085rem; --distance:7.483914773202494rem; --position:5.0613418906563385%; --time:2.4081984767441704s; --delay:-3.771567049178527s;"></div>
                    <div class="bubble"
                         style="--size:5.956207601267156rem; --distance:6.9635633774481045rem; --position:2.225408226695982%; --time:3.8040244679000366s; --delay:-3.469622409903176s;"></div>
                    <div class="bubble"
                         style="--size:2.753328321614217rem; --distance:8.929773683279826rem; --position:17.39134155297941%; --time:2.086843569112529s; --delay:-2.9095952846598565s;"></div>
                    <div class="bubble"
                         style="--size:4.887114385753549rem; --distance:6.7256613112359975rem; --position:35.78553965473062%; --time:3.007193073680772s; --delay:-2.545702417262483s;"></div>
                    <div class="bubble"
                         style="--size:5.720187794466815rem; --distance:6.086957395107794rem; --position:53.77599535151947%; --time:3.776652249573963s; --delay:-3.216077035728882s;"></div>
                    <div class="bubble"
                         style="--size:2.589240749824044rem; --distance:6.778796952838501rem; --position:103.44461131267698%; --time:2.964653808998024s; --delay:-2.533620172169561s;"></div>
                    <div class="bubble"
                         style="--size:3.8974265180217023rem; --distance:8.487588245450564rem; --position:8.540113164056248%; --time:2.8495151677746247s; --delay:-3.993986890855445s;"></div>
                    <div class="bubble"
                         style="--size:2.3441560063669673rem; --distance:7.353288053992669rem; --position:87.3531456288818%; --time:3.7535365563597622s; --delay:-2.096647268973358s;"></div>
                    <div class="bubble"
                         style="--size:4.022010612166617rem; --distance:7.385417512011247rem; --position:97.24680698468813%; --time:3.215392359298708s; --delay:-2.1488327678904944s;"></div>
                    <div class="bubble"
                         style="--size:3.5166437519350904rem; --distance:8.920529157529042rem; --position:49.2921836371253%; --time:3.5137515079833954s; --delay:-3.3621329250098815s;"></div>
                    <div class="bubble"
                         style="--size:5.886003539307922rem; --distance:8.962629586361192rem; --position:60.69976154844147%; --time:2.1210180621357795s; --delay:-2.977217433662929s;"></div>
                    <div class="bubble"
                         style="--size:3.4832956584893564rem; --distance:7.179599129734782rem; --position:40.45105279142754%; --time:2.978179865055852s; --delay:-3.4270620676622268s;"></div>
                    <div class="bubble"
                         style="--size:3.2039323149031516rem; --distance:8.323793508451331rem; --position:23.501533654688473%; --time:2.712927177845724s; --delay:-2.037809334329029s;"></div>
                    <div class="bubble"
                         style="--size:2.6414983223121338rem; --distance:8.684958708698757rem; --position:67.2475073398721%; --time:3.0748997749206786s; --delay:-2.594514506238647s;"></div>
                    <div class="bubble"
                         style="--size:4.8183103250549175rem; --distance:8.305449083491926rem; --position:18.17025034633557%; --time:2.5994907294719485s; --delay:-2.9478848309445302s;"></div>
                    <div class="bubble"
                         style="--size:5.098467156672879rem; --distance:8.568263628464678rem; --position:76.01270601899878%; --time:2.212023256895415s; --delay:-2.552450873146481s;"></div>
                    <div class="bubble"
                         style="--size:2.2633271640068733rem; --distance:8.44951954877631rem; --position:103.81870795684318%; --time:3.070969549296064s; --delay:-3.7132212724034837s;"></div>
                    <div class="bubble"
                         style="--size:2.7116093118022295rem; --distance:6.74440450449916rem; --position:20.53478762043923%; --time:2.8398983730100134s; --delay:-3.413675902901605s;"></div>
                    <div class="bubble"
                         style="--size:2.127860902731306rem; --distance:6.326154831449069rem; --position:48.51322549100658%; --time:3.8021692056749257s; --delay:-3.7532462387996066s;"></div>
                    <div class="bubble"
                         style="--size:5.452424569425979rem; --distance:6.615388791809731rem; --position:25.571069510983573%; --time:3.122128824630701s; --delay:-3.9245405631679176s;"></div>
                    <div class="bubble"
                         style="--size:5.951654599516997rem; --distance:7.330096578375408rem; --position:99.25082681590939%; --time:3.9992064512592504s; --delay:-3.2646022769857557s;"></div>
                    <div class="bubble"
                         style="--size:3.886152220072236rem; --distance:8.3051072804865rem; --position:12.894213843456676%; --time:2.1502460192490274s; --delay:-2.8575850685197084s;"></div>
                    <div class="bubble"
                         style="--size:3.335055307269206rem; --distance:9.265499443924766rem; --position:94.79601292771648%; --time:2.9015158022960534s; --delay:-2.681059315061508s;"></div>
                    <div class="bubble"
                         style="--size:3.328966223946524rem; --distance:6.031485073320412rem; --position:75.11462236003302%; --time:2.6405197272587295s; --delay:-3.3324971946363093s;"></div>
                    <div class="bubble"
                         style="--size:4.584110360586624rem; --distance:9.96988583212389rem; --position:88.80993539148443%; --time:3.390017442474539s; --delay:-2.7709230459518666s;"></div>
                    <div class="bubble"
                         style="--size:2.053950410454177rem; --distance:9.070784492645473rem; --position:11.868841837515184%; --time:3.6144381526033293s; --delay:-2.6921109795910008s;"></div>
                    <div class="bubble"
                         style="--size:3.757371131792941rem; --distance:8.739176426913929rem; --position:52.43245639495684%; --time:2.40787131151364s; --delay:-3.5513613557748087s;"></div>
                    <div class="bubble"
                         style="--size:2.480153473183014rem; --distance:8.490434280578997rem; --position:-3.2291324141495004%; --time:2.911735279598016s; --delay:-3.7503942683598552s;"></div>
                    <div class="bubble"
                         style="--size:5.83706686727332rem; --distance:6.7835839213129905rem; --position:71.22657804624308%; --time:2.893612601527553s; --delay:-2.017504628796319s;"></div>
                    <div class="bubble"
                         style="--size:2.792677091743995rem; --distance:9.923814197844983rem; --position:15.801351835468349%; --time:2.6254710258440888s; --delay:-3.3589636212636433s;"></div>
                    <div class="bubble"
                         style="--size:5.123330279306045rem; --distance:9.9133787710771rem; --position:-3.7622577891399844%; --time:3.3272694068733166s; --delay:-2.8668182527075134s;"></div>
                    <div class="bubble"
                         style="--size:3.9358271410657757rem; --distance:7.971746233870931rem; --position:36.2547156284973%; --time:2.0022275687821507s; --delay:-2.291502348628259s;"></div>
                    <div class="bubble"
                         style="--size:2.1973891377514336rem; --distance:9.426122154063606rem; --position:52.651733147329665%; --time:3.7397758514902955s; --delay:-2.886953137981075s;"></div>
                    <div class="bubble"
                         style="--size:3.8883567546179636rem; --distance:9.14572059829186rem; --position:51.55468245553251%; --time:2.781195975381313s; --delay:-2.4932721565071745s;"></div>
                    <div class="bubble"
                         style="--size:4.4113739651966rem; --distance:6.753382596408801rem; --position:26.757466121507406%; --time:2.583411497464489s; --delay:-2.990632176654196s;"></div>
                    <div class="bubble"
                         style="--size:2.586629905705677rem; --distance:7.520136223888518rem; --position:1.9823453817249277%; --time:2.546011994029278s; --delay:-3.179787068810096s;"></div>
                    <div class="bubble"
                         style="--size:2.2161616151095416rem; --distance:8.599109272052797rem; --position:30.3511429950212%; --time:3.1777274595428726s; --delay:-2.8220738698526078s;"></div>
                    <div class="bubble"
                         style="--size:4.10052975790541rem; --distance:9.929027970235214rem; --position:46.324838646637566%; --time:3.3007530632807667s; --delay:-2.7197055528319782s;"></div>
                    <div class="bubble"
                         style="--size:2.575927991928123rem; --distance:8.26676200458746rem; --position:79.37521363541832%; --time:3.7563642689940524s; --delay:-2.828771699290443s;"></div>
                    <div class="bubble"
                         style="--size:5.704952813380497rem; --distance:8.274446227317624rem; --position:54.04665033685043%; --time:2.8632408290978675s; --delay:-2.9769243022553082s;"></div>
                    <div class="bubble"
                         style="--size:5.691503102842744rem; --distance:6.730804563146065rem; --position:22.848793263449892%; --time:3.72997682110394s; --delay:-3.3273191872519865s;"></div>
                    <div class="bubble"
                         style="--size:3.656635445819913rem; --distance:7.386729877448509rem; --position:48.521804200881625%; --time:3.118533992232988s; --delay:-3.747611002536258s;"></div>
                    <div class="bubble"
                         style="--size:2.161752831219551rem; --distance:7.047758984984514rem; --position:85.91364819773564%; --time:3.303224751650967s; --delay:-3.351175507466447s;"></div>
                </div>
                <div class="content">
                    <!-- Navigation -->
                    <nav class="navbar navbar-expand-lg " id="footerNav">
                        <div class="footerContainer">

                            <!-- add logo in navbar -->
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                    data-target="#footerNavbarResponsive"
                                    aria-controls="footerNavbarResponsive" aria-expanded="false"
                                    aria-label="Toggle navigation">
                                <i class="fas fa-bars"></i>
                            </button>

                            <div class="collapse navbar-collapse" id="footerNavbarResponsive">

                                <ul class="navbar-nav">
                                    <li class="nav-item font-weight-bold">
                                        <a class="nav-link js-scroll-trigger" href="index.php#services">Services We
                                            Provide</a>
                                    </li>
                                    <li class="nav-item font-weight-bold">
                                        <a class="nav-link js-scroll-trigger" href="index.php#bio">About Us</a>
                                    </li>
                                    <li class="nav-item font-weight-bold navContact">
                                        <a class="nav-link js-scroll-trigger " href="index.php#shortContact">Contact
                                            Us</a>
                                    </li>
                                </ul>

                            </div>
                        </div>

                        <div class="footerSocial">
                            <a href="https://www.linkedin.com/in/daya4" target="_blank"><i
                                        class="fab fa-linkedin-in fa-3x social" size="9x"></i></a>
                            <a href="https://www.instagram.com/cut_da_crap" target="_blank"><i
                                        class="fab fa-instagram fa-3x social"></i></a>
                        </div>

                        <div class="admin">
                            <a href="admin.php"><i class="fas fa-lock"> Admin</i><br></a>
                            <a href="logout.php"><i class="fas fa-unlock">&nbsp;Logout</i></a>
                        </div>

                    </nav>
                </div>

                <div class="footer-copyright text-center py-3">© 2020 Copyright:
                    Created by Changming Tan, Amardip Kaur, Chunhai Yang, and Qinghang Zhang | Technical Support:
                    afternooners305@outlook.com
                </div>

                <svg style="position:fixed; top:100vh;">
                    <defs>
                        <filter id="blob">
                            <feGaussianBlur in="SourceGraphic" stdDeviation="10" result="blur"></feGaussianBlur>
                            <feComposite in="SourceGraphic" in2="blob" operator="atop"></feComposite>
                        </filter>
                    </defs>
                </svg>

            </div>
        </div>
    </footer>
</div>
<!-- end of footer -->

<!-- Bootstrap core JavaScript -->
<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

<!-- Plugin JavaScript -->
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

<!-- Custom JavaScript for this theme -->
<script src="js/scrolling-nav.js"></script>

<!-- Custom JavaScript  -->
<script src="js/iValidation.js"></script>

<script src="https://kit.fontawesome.com/a076d05399.js"></script>
<script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

<script>
    $('.datatable').DataTable();
</script>

<script>
    $('[data-toggle="tooltip"]').tooltip();
</script>

</body>
</html>
