<div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.html">
                    <span class="align-middle">AdminKit</span>
                </a>

                <ul class="sidebar-nav">
                    {{-- Links dashboard --}}
                    <li class="sidebar-header">
                        Main
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.dashboard')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                            <i class="align-middle" data-feather="sliders"></i> <span
                                class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    {{-- fim links dashboard --}}

                    {{-- link categorias --}}

                     <li class="sidebar-header">
                        Categorias
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.category.create')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.category.create') }}">
                            <i class="align-middle" data-feather="plus-circle"></i> <span
                                class="align-middle">Criar</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.category.manage')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.category.manage') }}">
                            <i class="align-middle" data-feather="layers"></i> <span
                                class="align-middle">Gerir</span>
                        </a>
                    </li>
                    {{-- fim links categorias --}}

                    {{-- links subcategorias --}}
                     <li class="sidebar-header">
                        Sub Categorias
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.subcategory.create')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.subcategory.create') }}">
                            <i class="align-middle" data-feather="plus-circle"></i> <span
                                class="align-middle">Criar</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.subcategory.manage')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.subcategory.manage') }}">
                            <i class="align-middle" data-feather="layers"></i> <span
                                class="align-middle">Gerir</span>
                        </a>
                    </li>
                    {{-- fim links subcategorias --}}

                    {{-- links atributos --}}

                     <li class="sidebar-header">
                        Atributos do produto
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.productattribute.create')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.productattribute.create') }}">
                            <i class="align-middle" data-feather="plus-circle"></i> <span
                                class="align-middle">Criar</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.productattribute.manage')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.productattribute.manage') }}">
                            <i class="align-middle" data-feather="layers"></i> <span
                                class="align-middle">Gerir</span>
                        </a>
                    </li>
                    {{-- fim links atributos --}}

                    {{-- Links discontos --}}
                     <li class="sidebar-header">
                        Desconto
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.discount.create')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.discount.create') }}">
                            <i class="align-middle" data-feather="plus-circle"></i> <span
                                class="align-middle">Criar</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.discount.manage')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.discount.manage') }}">
                            <i class="align-middle" data-feather="layers"></i> <span
                                class="align-middle">Gerir</span>
                        </a>
                    </li>
                    {{-- fim links discontos --}}

                    {{-- links produtos --}}
                     <li class="sidebar-header">
                        Produtos
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.product.manage')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.product.manage') }}">
                            <i class="align-middle" data-feather="shopping-bag"></i> <span
                                class="align-middle">Gerir</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.product.review.manage')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.product.review.manage') }}">
                            <i class="align-middle" data-feather="star"></i> <span
                                class="align-middle">Gerir Avaliação</span>
                        </a>
                    </li>
                    {{-- fim links produtos --}}

                    {{-- links Histórico --}}
                     <li class="sidebar-header">
                        Histórico
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.cart.history')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.cart.history') }}">
                            <i class="align-middle" data-feather="shopping-cart"></i> <span
                                class="align-middle">Carrinho</span>
                        </a>
                    </li>

                    <li class="sidebar-item {{ request()->routeIs('admin.order.history')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.order.history') }}">
                            <i class="align-middle" data-feather="layers"></i> <span
                                class="align-middle">Pedidos</span>
                        </a>
                    </li>
                    {{-- fim links Histórico --}}



                    {{-- Old links --}}
                    <hr>
                    <li class="sidebar-item {{ request()->routeIs('admin.settings')?'active':'' }}">
                        <a class="sidebar-link" href="{{ route('admin.settings') }}">
                            <i class="align-middle" data-feather="settings"></i> <span class="align-middle">Definições</span>
                        </a>
                    </li>
                </ul>
            </div>
