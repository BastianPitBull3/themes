@extends('app')

@section('content')
<section id="main">
    <header class="header">
        <h3 class="header-text">Configuración</h3>
    </header>
    <div class="config-div content">
        <div class="row">
            <div class="form-check form-check-reverse form-switch col">
                <label class="form-check-label" for="darkMode-switch">Modo oscuro</label>
                <input class="form-check-input" type="checkbox" role="switch" id="darkMode-switch">
            </div>
            <div class="col-4"></div>
            <div class="col-3"></div>
            <div class="col-3"></div>
        </div>
        <div class="row">
            <div class="col"></div>
            <div class="container col-6 align-items-center">
                <table class="table">
                    <thead></thead>
                    <tbody class="t-body">
                        <tr class="t-content">
                            <td>
                                {{-- <label for="color-menu-text" class="form-label">Color de menú: texto</label> --}}
                                Color de menú: texto
                            </td>
                            <td>
                                <div class="bm-2 d-flex t-selector">
                                    <input type="color" class="form-control form-control-color" id="color-menu-text">
                                </div>
                            </td>
                          </tr>
                          <tr class="t-content">
                            <td>
                                {{-- <label for="color-menur-bg" class="form-label">Color de menú: fondo</label> --}}
                                Color de menú: fondo
                            </td>
                            <td>
                                <div class="bm-2 d-flex t-selector">
                                    <input type="color" class="form-control form-control-color" id="color-menu-bg">
                                </div>
                            </td>
                          </tr>
                      <tr class="t-content">
                        <td>
                            {{-- <label for="color-header-text" class="form-label">Color de encabezados: texto</label> --}}
                            Color de encabezados: texto
                        </td>
                        <td>
                            <div class="bm-2 d-flex t-selector">
                                <input type="color" class="form-control form-control-color" id="color-header-text">
                            </div>
                        </td>
                      </tr>
                      <tr class="t-content">
                        <td>
                            {{-- <label for="color-header-bg" class="form-label">Color de encabezados: fondo</label> --}}
                            Color de encabezados: fondo
                        </td>
                        <td>
                            <div class="bm-2 d-flex t-selector">
                                <input type="color" class="form-control form-control-color" id="color-header-bg">
                            </div>
                        </td>
                      </tr>
                      <tr class="t-content">
                        <td>
                            {{-- <label for="color-content-text" class="form-label">Color de contenido: texto</label> --}}
                            Color de contenido: texto
                        </td>
                        <td>
                            <div class="bm-2 d-flex t-selector">
                                <input type="color" class="form-control form-control-color" id="color-content-text">
                            </div>
                        </td>
                    </tr>
                    <tr class="t-content">
                        <td>
                            {{-- <label for="color-content-bg" class="form-label">Color de contenido: fondo</label> --}}
                            Color de contenido: fondo
                        </td>
                        <td class="t-content">
                            <div class="bm-2 d-flex t-content t-selector">
                                <input type="color" class="form-control form-control-color" id="color-content-bg">
                            </div>
                        </td>
                    </tr>
                    <tr class="t-content">
                        <td colspan="2" class="save-theme">
                            <form class="theme-form content">
                                <div class="form-control">
                                  <label for="themes">Nombre del tema</label>
                                  <input type="text" id="theme-name">
                                  <button type="submit" class="btn save-theme-btn" id="save-theme-btn">Guardar Tema</button>
                                </div>
                            </form>
                            <div class="content themes-container">
                                <h3>Themes</h3>
                                <!-- list -->
                                <div class="themes-container">
                                  <div class="themes-list">
                                    {{-- <article class="theme-item">
                                      
                                    </article> --}}
                                  </div>
                                  <button type="button" class="clear-btn">clear items</button>
                                </div>
                            </div>
                        </td>
                    </tr>
                    {{-- </tbody> --}}
                  </table>
            </div>
            <div class="col">
            </div>
        </div>
    </div>
</section>
@endsection