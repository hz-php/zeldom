<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);

?>
<h2 class="section__title" data-aos="fade-right" data-aos-delay="0">
    <?= $arResult['PREVIEW_TEXT']?>
</h2>
<div class="asort" id="asort">
    <div class="asort__pics">
        <div class="asort__pic" data-aos="fade-left" data-aos-delay="0">
            <img width="777" src="/local/templates/zel_dom/img/asort/pic-1.jpg" height="568" class="lazy" data-src="/local/templates/zel_dom/img/asort/pic-1.jpg" alt=""></div>
        <div class="asort__pic-label" data-aos="fade-left" data-aos-delay="0"><i><img width="83" alt="Like" src="/local/templates/zel_dom/img/asort/like.svg" height="83"></i>
            <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][6]?></p>
        </div>
    </div>
    <div class="asort__desc">
        <div class="txt asort__txt">
            <p><?= $arResult['PROPERTIES']['AREA_TEXT']['VALUE']['TEXT']?></p>
        </div>
        <ul class="asort__list">
            <li data-aos="fade-right" data-aos-delay="0"><i>
                    <img width="48" src="/local/templates/zel_dom/img/asort/icon-1.svg" height="48" alt=""></i>
                <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][0]?></p>
            </li>
            <li data-aos="fade-right" data-aos-delay="50"><i>
                    <img width="48" src="/local/templates/zel_dom/img/asort/icon-2.svg" height="48" alt=""></i>
                <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][1]?></p>
            </li>
            <li data-aos="fade-right" data-aos-delay="0"><i>
                    <img width="48" src="/local/templates/zel_dom/img/asort/icon-3.svg" height="48" alt=""></i>
                <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][2]?></p>
            </li>
            <li data-aos="fade-right" data-aos-delay="50"><i><img width="48" src="/local/templates/zel_dom/img/asort/icon-4.svg" height="48" alt=""></i>
                <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][3]?></p>
            </li>
            <li data-aos="fade-right" data-aos-delay="0"><i><img width="48" src="/local/templates/zel_dom/img/asort/icon-5.svg" height="48" alt=""></i>
                <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][4]?></p>
            </li>
            <li data-aos="fade-right" data-aos-delay="50"><i><img width="48" src="/local/templates/zel_dom/img/asort/icon-6.svg" height="48" alt=""></i>
                <p><?= $arResult['PROPERTIES']['TEXT_FIELD']['VALUE'][5]?></p>
            </li>
        </ul>
        <div class="asort__collapse js-collapse">
            <div class="txt asort__collapse-wrap js-collapse-wrap">
                <div>
                   <?= $arResult['DETAIL_TEXT']?>
                </div>
            </div>
            <span class="link js-collapse-link" tabindex="0" role="button">Читать больше...</span>
        </div>
        <div class="asort__btns" data-aos="fade-right" data-aos-delay="0">
            <a class="btn1 asort__btn" href="/about/"><span>О&nbsp;компании «Земледел»</span>
                <i class="btn1__arr">
                    <svg xmlns="http://www.w3.org/2000/svg" id="q" viewBox="0 0 40 26">
                        <path d="M2 11.0533H33.72L26.46 3.0229C26.2919 2.83666 26.1653 2.62175 26.0874 2.39045C26.0095 2.15915 25.9818 1.91598 26.006 1.67483C26.0547 1.1878 26.3116 0.738555 26.72 0.425926C27.1284 0.113297 27.655 -0.0371095 28.1838 0.00779372C28.7127 0.052697 29.2005 0.289232 29.54 0.665363L39.54 11.7163C39.6073 11.8042 39.6674 11.8966 39.72 11.9926C39.72 12.0847 39.82 12.1399 39.86 12.232C39.9507 12.4432 39.9981 12.668 40 12.8951C39.9981 13.1222 39.9507 13.347 39.86 13.5581C39.86 13.6502 39.76 13.7055 39.72 13.7976C39.6674 13.8936 39.6073 13.986 39.54 14.0739L29.54 25.1248C29.352 25.3327 29.1165 25.4999 28.8503 25.6145C28.5841 25.7291 28.2938 25.7883 28 25.7879C27.5327 25.7887 27.0798 25.6388 26.72 25.3643C26.5175 25.2096 26.3501 25.0197 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8742 26.0085 23.631 26.0866 23.3996C26.1647 23.1683 26.2916 22.9534 26.46 22.7673L33.72 14.7369H2C1.46957 14.7369 0.96086 14.5429 0.585787 14.1975C0.210714 13.8521 0 13.3836 0 12.8951C0 12.4066 0.210714 11.9381 0.585787 11.5927C0.96086 11.2473 1.46957 11.0533 2 11.0533Z"
                              fill="white"/>
                        <path d="M39.86 13.5572C39.86 13.6493 39.76 13.7045 39.72 13.7966C39.6674 13.8927 39.6073 13.985 39.54 14.0729L29.54 25.1249C29.352 25.3328 29.1165 25.5 28.8503 25.6146C28.5841 25.7292 28.2938 25.7884 28 25.788C27.5327 25.7888 27.0798 25.6389 26.72 25.3643C26.5175 25.2097 26.3501 25.0198 26.2274 24.8055C26.1047 24.5912 26.0291 24.3567 26.0049 24.1154C25.9808 23.8741 26.0085 23.6309 26.0866 23.3995C26.1647 23.1681 26.2916 22.9532 26.46 22.7671L33.72 14.736H2C1.46957 14.736 0.96086 14.542 0.585787 14.1965C0.210714 13.8511 0 13.3826 0 12.894H40C39.9981 13.1211 39.9507 13.346 39.86 13.5572Z"/>
                    </svg>
                </i>
            </a>
        </div>
    </div>
</div>