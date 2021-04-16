<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
array CFile::ResizeImageGet(
    mixed file,
    array arSize,
    const resizeType = BX_RESIZE_IMAGE_PROPORTIONAL,
    bool bInitSizes = false,
    array arFilters = false,
        bool bImmediate = false,
    bool jpgQuality = false
);