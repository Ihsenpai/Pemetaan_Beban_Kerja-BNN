<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="dark">
    <head>
        @include('partials.head')
    </head>
    <body class="min-h-screen bg-white dark:bg-zinc-800">
        <flux:sidebar sticky stashable class="border-e border-zinc-200 bg-zinc-50 dark:border-zinc-700 dark:bg-zinc-900">
            <flux:sidebar.toggle class="lg:hidden" icon="x-mark" />

            @php
                $currentUser = null;
                $userRole = null;
                $dashboardRoute = 'login';
                
                if (Auth::guard('admin')->check()) {
                    $currentUser = Auth::guard('admin')->user();
                    $userRole = 'admin';
                    $dashboardRoute = 'admin.dashboard';
                } elseif (Auth::guard('pimpinan')->check()) {
                    $currentUser = Auth::guard('pimpinan')->user();
                    $userRole = 'pimpinan';
                    $dashboardRoute = 'pimpinan.dashboard';
                } elseif (Auth::guard('pegawai')->check()) {
                    $currentUser = Auth::guard('pegawai')->user();
                    $userRole = 'pegawai';
                    $dashboardRoute = 'pegawai.dashboard';
                } elseif (Auth::guard('katim')->check()) {
                    $currentUser = Auth::guard('katim')->user();
                    $userRole = 'katim';
                    $dashboardRoute = 'katim.dashboard';
                }
            @endphp

            <a href="{{ route($dashboardRoute) }}" class="me-5 flex items-center space-x-2 rtl:space-x-reverse" wire:navigate>
                <x-app-logo />
            </a>

            <flux:navlist variant="outline">
                <flux:navlist.group :heading="__('Menu Utama')" class="grid">
                    @if($userRole === 'admin')
                        <flux:navlist.item icon="home" :href="route('admin.dashboard')" :current="request()->routeIs('admin.dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                    @elseif($userRole === 'pimpinan')
                        <flux:navlist.item icon="home" :href="route('pimpinan.dashboard')" :current="request()->routeIs('pimpinan.dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                        <flux:navlist.item icon="folder-git-2" :href="route('pimpinan.pegawai.list')" :current="request()->routeIs('pimpinan.pegawai.*')" wire:navigate>{{ __('Pegawai') }}</flux:navlist.item>
                        <flux:navlist.item icon="book-open-text" :href="route('pimpinan.kotak.saran')" :current="request()->routeIs('pimpinan.kotak.saran')" wire:navigate>{{ __('Kotak Saran') }}</flux:navlist.item>
                    @elseif($userRole === 'pegawai')
                        <flux:navlist.item icon="home" :href="route('pegawai.dashboard')" :current="request()->routeIs('pegawai.dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                        <flux:navlist.item icon="book-open-text" :href="route('pegawai.form.p4gn')" :current="request()->routeIs('pegawai.form.p4gn')" wire:navigate>{{ __('Form P4GN') }}</flux:navlist.item>
                        <flux:navlist.item icon="book-open-text" :href="route('pegawai.form.dukungan')" :current="request()->routeIs('pegawai.form.dukungan')" wire:navigate>{{ __('Form Dukungan') }}</flux:navlist.item>
                        <flux:navlist.item icon="book-open-text" :href="route('pegawai.form.katim')" :current="request()->routeIs('pegawai.form.katim')" wire:navigate>{{ __('Form Evaluasi Katim') }}</flux:navlist.item>
                    @elseif($userRole === 'katim')
                        <flux:navlist.item icon="home" :href="route('katim.dashboard')" :current="request()->routeIs('katim.dashboard')" wire:navigate>{{ __('Dashboard') }}</flux:navlist.item>
                        <flux:navlist.item icon="book-open-text" :href="route('katim.form.rekankerja1')" :current="request()->routeIs('katim.form.rekankerja1')" wire:navigate>{{ __('Form Rekan Kerja') }}</flux:navlist.item>
                    @endif
                </flux:navlist.group>
            </flux:navlist>

            <flux:spacer />

            @if($currentUser)
                <!-- Desktop User Menu -->
                <flux:dropdown class="hidden lg:block" position="bottom" align="start">
                    <flux:profile
                        :name="$currentUser->name"
                        :initials="substr($currentUser->name, 0, 2)"
                        icon:trailing="chevrons-up-down"
                    />

                    <flux:menu class="w-[220px]">
                        <flux:menu.radio.group>
                            <div class="p-0 text-sm font-normal">
                                <div class="flex items-center gap-2 px-1 py-1.5 text-start text-sm">
                                    <span class="relative flex h-8 w-8 shrink-0 overflow-hidden rounded-lg">
                                        <span
                                            class="flex h-full w-full items-center justify-center rounded-lg bg-neutral-200 text-black dark:bg-neutral-700 dark:text-white"
                                        >
                                            {{ substr($currentUser->name, 0, 2) }}
                                        </span>
                                    </span>

                                    <div class="grid flex-1 text-start text-sm leading-tight">
                                        <span class="truncate font-semibold">{{ $currentUser->name }}</span>
                                        <span class="truncate text-xs">{{ $currentUser->email ?? 'No email' }}</span>
                                        <span class="truncate text-xs text-blue-600">{{ ucfirst($userRole) }}</span>
                                    </div>
                                </div>
                            </div>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <flux:menu.radio.group>
                            <flux:menu.item :href="route('settings.profile')" icon="cog" wire:navigate>{{ __('Settings') }}</flux:menu.item>
                        </flux:menu.radio.group>

                        <flux:menu.separator />

                        <form method="POST" action="{{ route('logout') }}" class="w-full">
                            @csrf
                            <flux:menu.item as="button" type="submit" icon="arrow-right-start-on-rectangle" class="w-full">
                                {{ __('Log Out') }}
                            </flux:menu.item>
                        </form>
                    </flux:menu>
                </flux:dropdown>
            @endif
        </flux:sidebar>

        {{ $slot }}

        @fluxScripts
    </body>
</html>
