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

get_header();
?>

    <div class="ui inverted vertical masthead center aligned segment" id="header-slide">
        <div class="dark-blue" id="header-wrapper">
            <h1>
                Angol és spanyol nyelvtanfolyamok
            </h1>
            <h2>Egyéni és kiscsoportos vállalati tanfolyamok,<br/> magánórák.</h2>
            <a class="ui huge inverted neon-green button" href="#training-slides">Részletek<i class="right arrow icon"></i></a>
        </div>
    </div>
    <div class="ui vertical stripe segment" id="welcome-section">
        <div class="ui middle aligned stackable grid container">
            <div class="row">
                <div class="eight wide column italic-conversational">
                    <h3 class="ui dark-blue header">Hatékony, kiscsoportos angol és spanyol tanfolyamok az Ön cégénél.</h3>
                    <p><i>Üdvözlöm a honlapomon! Kedves Érdeklődő!</i></p>
                    <p><i>
                        Szeretné, ha munkatársai megállnák a helyüket angol nyelven történő tárgyalásokon? Fontos, hogy
                        pontosan és gördülékenyen kommunikáljanak és prezentáljanak? Szükségük van az angolra mindennapi
                        tevékenységük során, hiszen nyelvigényes környezetben dolgoznak? Amennyiben a válasza valamelyik
                        kérdésre igen, kérem, olvasson tovább.
                        <br/>Üdvözlettel,
                        <br/>Veres András</i></p>
                </div>
                <div class="six wide right floated column">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/andras_veres.jpg" class="ui large bordered rounded image" alt="András Veres">
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
                    <h2>ABOUT ME</h2>
                </div>
                <div class="six wide right floated column">
                    <img src="<?php bloginfo('template_directory'); ?>/assets/images/andras_veres.jpg" class="ui large bordered rounded image" alt="András Veres">
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
                    <p>Információ amit az ajánlatkérésről tudni kell.</p>
                </div>
                <div class="seven wide column">
                    <form class="ui large inverted form">
                      <div class="field">
                        <label>Név</label>
                        <input type="text" name="name" placeholder="Name">
                      </div>
                      <div class="field">
                        <label>Telefonszám</label>
                        <input type="text" name="phonenumber" placeholder="Phonenumber">
                      </div>
                      <div class="field">
                        <label>Email cím</label>
                        <input type="email" name="email" placeholder="Email">
                      </div>
                      <div class="field">
                        <label>Tanfolyam típus</label>
                        <select class="ui search dropdown">
                            <option value="WF">Magán óra</option>
                            <option value="WF">Céges</option>
                            <option value="WF">Kis tanfolyam</option>
                            <option value="WF">Nagy tanfolyam</option>
                        </select>
                      </div>
                      <div class="field">
                        <div class="ui checkbox">
                          <input type="checkbox" tabindex="0" class="hidden">
                          <label>I agree to the Terms and Conditions</label>
                        </div>
                      </div>
                      <button class="ui button" type="submit">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

<?php
get_footer();