(function(wp){
  const { __ } = wp.i18n
  const { registerBlockType } = wp.blocks
  const { ServerSideRender, PanelBody } = wp.components
  const { Fragment } = wp.element
  const React = wp.element
  const BlockIcon = (
	<svg width="26" height="26" viewBox="0 0 26 26" fill="none" xmlns="http://www.w3.org/2000/svg">
	<path fill-rule="evenodd" clip-rule="evenodd" d="M18.05 5.4L18.95 6.6L11.75 12L18.95 17.4L18.05 18.6L9.25 12L18.05 5.4Z" fill="black"/>
	<path d="M8 11C8 10.4477 8.44772 10 9 10H11C11.5523 10 12 10.4477 12 11V13C12 13.5523 11.5523 14 11 14H9C8.44772 14 8 13.5523 8 13V11Z" fill="black"/>
	<path d="M18 5C18 4.44772 18.4477 4 19 4H21C21.5523 4 22 4.44772 22 5V7C22 7.55228 21.5523 8 21 8H19C18.4477 8 18 7.55228 18 7V5Z" fill="black"/>
	<path d="M18 17C18 16.4477 18.4477 16 19 16H21C21.5523 16 22 16.4477 22 17V19C22 19.5523 21.5523 20 21 20H19C18.4477 20 18 19.5523 18 19V17Z" fill="black"/>
	<path d="M9.02166 11.5C10.126 11.5 10.6918 12.4565 10.6183 13.2832L12.8895 13.2779C14.3071 13.2779 15.0309 14.9832 14.0553 16.0035L11.5983 18.5904L12.6845 22.0882C12.9884 23.0594 12.3009 24.1799 11.1501 24.1799H7.86199C7.49242 24.1799 7.18431 24.0623 6.94092 23.887L6.74798 24.4359L6.74336 24.4483C6.22239 25.8506 4.24664 25.8506 3.72567 24.4483L3.72013 24.4334L0.575389 15.3852L0.564442 15.3474C0.311387 14.4742 0.872943 13.2779 2.10792 13.2779H5.2686L5.51343 12.59C5.73899 11.9389 6.35249 11.5096 7.02799 11.5076L7.03268 11.5076L9.02166 11.5Z" fill="white"/>
	<path d="M12.8895 14.7778L9.62346 14.7854C9.57942 14.7854 9.53538 14.8158 9.5207 14.8614L9.27116 15.5832C9.24915 15.6592 9.30052 15.7352 9.37392 15.7352H10.6436C10.7391 15.7352 10.7904 15.8567 10.7244 15.9251L8.69869 18.1058H8.70603L9.74823 21.5021C9.77025 21.578 9.71887 21.6464 9.64548 21.6464H8.62529C8.57392 21.6464 8.53722 21.616 8.52254 21.5704L8.00144 19.8305C7.97208 19.7241 7.83264 19.7241 7.79594 19.8229L7.37025 21.0462C7.36291 21.069 7.36291 21.0918 7.37025 21.1146L7.75924 22.5962C7.77392 22.6418 7.81796 22.6797 7.86199 22.6797H11.1501C11.2235 22.6797 11.2748 22.6038 11.2528 22.5354L9.92437 18.2577C9.90969 18.2197 9.92437 18.1741 9.95373 18.1437L12.9702 14.9678C13.0363 14.8994 12.9849 14.7778 12.8895 14.7778Z" fill="black"/>
	<path d="M9.02164 13L7.03265 13.0076C6.98862 13.0076 6.94458 13.038 6.9299 13.0836L6.67302 13.8054C6.64366 13.8814 6.70238 13.9573 6.77577 13.9573H7.61247C7.68586 13.9573 7.73724 14.0333 7.71522 14.1093L5.34458 20.8259C5.30789 20.9247 5.17578 20.9247 5.13908 20.8259L3.43633 15.9784C3.40697 15.9024 3.46569 15.8265 3.53908 15.8265H4.3978C4.44183 15.8265 4.48587 15.8568 4.50055 15.9024L5.11706 17.65C5.15376 17.7487 5.28587 17.7487 5.32257 17.65L6.27669 14.9299C6.30605 14.8539 6.24733 14.7779 6.17394 14.7779H2.10789C2.0345 14.7779 1.98312 14.8539 2.00514 14.9299L5.13174 23.9259C5.16844 24.0247 5.30055 24.0247 5.33724 23.9259L9.12439 13.152C9.14641 13.076 9.09503 13 9.02164 13Z" fill="#D8141C"/>
	</svg>
  );

  registerBlockType("vk-blocks/share-button", {
    title: __("Share button", "veu-block"),
    icon: BlockIcon,
    category: "veu-block",
    edit: ({className}) => {
      return (
          <Fragment>
            <div className={`${className} veu_share_button_block`} >
              <ServerSideRender
                block="vk-blocks/share-button"
                attributes={{position: 'After'}}
              />
            </div>
          </Fragment>
        )
    },
    save: () => null
  })
})(wp);