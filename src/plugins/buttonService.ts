import { Button } from '~/Types/template'

export const newButton = (): Button => {
  return {
    name: "",
    replyType: "",
    text: { content: "", autoReply: "" },
    template: { templateForm: { id: 1, name: "" }, autoReply: "" },
    url: { link: "", autoReply: "" },
    interview: { interviewFormat: { id: 1, name: "" }, autoReply: "" },
    tag: { attachment: [""], detach: [""] }
  }
}

export default newButton;