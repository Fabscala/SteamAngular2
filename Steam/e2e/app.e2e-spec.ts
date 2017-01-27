import { SteamPage } from './app.po';

describe('steam App', function() {
  let page: SteamPage;

  beforeEach(() => {
    page = new SteamPage();
  });

  it('should display message saying app works', () => {
    page.navigateTo();
    expect(page.getParagraphText()).toEqual('app works!');
  });
});
