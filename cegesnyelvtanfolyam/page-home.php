<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Cegesnyelvtanfolyam
 */

// Advanced Custom Fields
$focim = get_field('focim');
$alcim = get_field('alcim');
$welcome_cim = get_field('welcome_cim');
$welcome_leiras = get_field('welcome_leiras');
$welcome_kep = get_field('welcome_kep');
$rolam_cim_bal = get_field('rolam_cim_bal');
$rolam_cim_jobb = get_field('rolam_cim_jobb');
$ajanlatkeres = get_field('ajanlatkeres_menete');

get_header();
?>

    <div class="ui inverted vertical masthead center aligned segment" id="header-slide">
        <div class="dark-blue" id="header-wrapper">
            <h1><?php echo($focim); ?></h1>
            <h2><?php echo($alcim); ?></h2>
            <a class="ui huge inverted neon-green button" href="#training-slides">Részletek<i class="right arrow icon"></i></a>
        </div>
    </div>
    <div class="ui vertical stripe segment" id="welcome-section">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column italic-conversational">
                    <h3 class="ui dark-blue header"><?php echo($welcome_cim) ?></h3>
                    <?php echo($welcome_leiras); ?>
                </div>
                <div class="six wide right floated column">
                    <?php if ($welcome_kep) {
                        echo ('<img src="' . $welcome_kep . '" class="ui large bordered rounded image" alt="András Veres">');
                    } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe inverted segment" id="training-slides">
        <h2 class="ui white header center aligned huge">
            Vállalati tanfolyamok, tréningek angol és spanyol nyelven
        </h2>
        <h4 class="ui horizontal divider neon header">
            <i class="student icon"></i>
            Részletek
        </h4>
        <div class="ui equal width stackable internally celled grid">
            <div class="center aligned row">
                <div class="column">
                    <h3 class="ui light-blue header">Kommunikációs tanfolyamok (Kiscsoportos 2-6 fő)</h3>
                    <h3 class="ui light-blue header">Egyéni, one-on-one tanfolyamok</h3>
                    <p><b class="neon-green">Kiknek ajánlom?</b><br/>Középfok körüli szinttől (B1+) - felsőfokig (C1)</p>
                    <p><b class="neon-green">Milyen hosszú egy tanóra?</b><br/>Egy alkalom 90 percből áll, ami két 45 perces
                        órának felel
                        meg.</p>
                    <p><b class="neon-green">Mire kerül sor a tanfolyamon?</b><br>A tananyagot minden esetben az egyéni igények
                        figyelembe
                        vételével állítom össze.</p>
                </div>
                <div class="column">
                    <div id="chartContainer"></div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe segment dark-blue" id="about-me">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column italic-conversational">
                    <?php echo($rolam_cim_bal); ?>
                </div>
                <div class="six wide right floated column">
                    <?php echo($rolam_cim_jobb); ?>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical inverted segment">
        <div class="ui middle aligned stackable grid container">
            <div class=" row">
                <div class="seven wide column">
                    <h4 class="ui white mini-header header">Tapasztalataim szerint a következő tevékenységekre van igény a tanfolyam keretein belül</h4>
                    <div class="ui bulleted list white">
                        <div class="item">angolul és spanyolul zajló kommunikáció fejlesztésére, legyen szó üzleti vagy általános angol és spanyol nyelvről.</div>
                        <div class="item">on-the-job segítség nyújtására, amely magában foglalja tárgyalások és meetingek szimulációját, beszámolók és e-mailek megfogalmazását és prezentációk összeállítását.</div>
                        <div class="item">nyelvtani rendszerezésre és gyakorlásra.</div>
                        <div class="item">írott és hallott szöveg értésének fejlesztésére.</div>
                        <div class="item">kiejtés és intonáció specifikus fejlesztésére.</div>
                    </div>
                </div>
                <div class="seven wide right floated column">
                    <h4 class="ui white mini-header header">Milyen eredményre számíthat? Nyelvtudása hatékony fejlesztésére jó hangulatú órákon</h4>
                    <div class="ui bulleted list white">
                        <div class="item">jelentősen nő az írott és hallott szövegek értésének képessége</div>
                        <div class="item">javul kiejtése és intonációja; unglishHunhh d Hunglish helyett English-t beszél majd</div>
                        <div class="item">uralja a legfontosabb nyelvtani szerkezeteket</div>
                        <div class="item">elsajátít számos formális és informális stíluselemet</div>
                        <div class="item">mindezek eredményeképpen magabiztosabban kommunikál szóban és írásban</div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui vertical stripe inverted segment dark-blue" id="proposal">
        <div class="ui middle aligned stackable grid container">
            <div class=" row">
                <div class="seven wide column">
                    <h4 class="ui white mini-header header">Az ajánlatkérés menete</h4>
                    <?php echo($ajanlatkeres); ?>
                </div>
                <div class="seven wide column wpcf7" role="form" id="wpcf7-f5-o1" lang="hu-HU" dir="ltr">
                    <div class="screen-reader-response"></div>
                    <form action="/#wpcf7-f5-o1" method="post" class="ui large inverted form wpcf7-form" novalidate="novalidate">
                        <div style="display: none;">
                            <input type="hidden" name="_wpcf7" value="5" />
                            <input type="hidden" name="_wpcf7_version" value="5.1.1" />
                            <input type="hidden" name="_wpcf7_locale" value="hu_HU" />
                            <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f5-p62-o1" />
                            <input type="hidden" name="_wpcf7_container_post" value="62" />
                            <input type="hidden" name="g-recaptcha-response" value="" />
                        </div>
                      <div class="field">
                        <label>Név</label>
                        <span class="wpcf7-form-control-wrap your-name"><input type="text" name="your-name" placeholder="Name" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false"></span>
                      </div>
                      <div class="field">
                        <label>Telefonszám</label>
                        <span class="wpcf7-form-control-wrap tel-300"><input type="tel" name="tel-300" placeholder="Phonenumber" class="wpcf7-form-control wpcf7-text wpcf7-tel wpcf7-validates-as-tel" aria-invalid="false"></span>
                      </div>
                      <div class="field">
                        <label>Email cím</label>
                        <span class="wpcf7-form-control-wrap your-email"><input type="email" name="your-email" placeholder="Email" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false"></span>
                      </div>
                      <div class="field">
                        <label>Tanfolyam típus</label>
                        <span class="wpcf7-form-control-wrap menu-179"><select name="menu-179" class="ui search dropdown wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                            <option value="Magán óra">Magán óra</option>
                            <option value="Céges">Céges</option>
                            <option value="Kis tanfolyam">Kis tanfolyam</option>
                            <option value="Nagy tanfolyam">Nagy tanfolyam</option>
                        </select></span>
                      </div>
                      <div class="field">
                        <label>Résztvevők száma</label>
                        <span class="wpcf7-form-control-wrap menu-180"><select name="menu-180" class="ui search dropdown wpcf7-form-control wpcf7-select wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
                            <option value="Egy">Egy fő</option>
                            <option value="Kettő">Két fő</option>
                            <option value="Három">Három fő</option>
                            <option value="Négy">Négy fő</option>
                            <option value="Öt">Öt fő</option>
                            <option value="Hat">Hat fő</option>
                        </select></span>
                      </div>
                      <div class="field">
                        <label>Üzenet</label>
                        <span class="wpcf7-form-control-wrap your-message"><textarea name="your-message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"></textarea></span>
                      </div>
                      <button class="ui button wpcf7-form-control wpcf7-submit" value="Küldés" type="submit">Küldés</button>
                      <div class="wpcf7-response-output wpcf7-display-none"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();