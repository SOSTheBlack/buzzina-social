@php
    $containerFooter = ($configData['contentLayout'] === 'compact') ? 'container-xxl' : 'container-fluid';
@endphp

    <!-- Footer -->
<footer
    class="content-footer footer bg-footer-theme">
    <div
        class="{{ $containerFooter }}">
        <div
            class="footer-container d-flex align-items-center justify-content-between py-4 flex-md-row flex-column">
            <div
                class="text-body mb-2 mb-md-0">
                ©
                <script>document.write(new Date().getFullYear());</script>
                ,
                feito
                com
                <span
                    class="text-danger"><i
                        class="tf-icons ri-heart-fill"></i></span>
                por
                <a href="{{ (!empty(config('app.company.url')) ? config('app.company.url') : '') }}"
                   target="_blank"
                   class="footer-link">{{ (!empty(config('app.company.name')) ? config('app.company.name') : '') }}</a>
            </div>

            <div
                class="d-none d-lg-inline-block">
                <span
                    class="footer-link me-4"
                    target="_blank">{{ config('app.version') }}</span>
            </div>
        </div>
    </div>
</footer>
<!--/ Footer -->
